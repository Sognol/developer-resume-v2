<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use App\Http\Requests\StoreResume;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $resumes = auth()->user()->resumes;

        return view('resumes.index', compact('resumes'));
    }

    public function create()
    {
        $resume = json_encode(Resume::factory()->make());
        return view('resumes.create', compact('resume'));
        //return view('resumes.create');

    }

    public function store(StoreResume $request)
    {
        $data = $request->validated();
        $picture = $data['content']['basics']['picture'];
        if ($picture !== '/storage/pictures/arch.png') {
            $uri = $this->savePicture($picture);
            $data['content']['basics']['picture'] = $uri;
        }

        $resume = auth()->user()->resumes()->create($data);

        Session::flash('alert', [
            'type' => 'success',
            'messages' => ["Resume $resume->title created successfully"]
        ]);

        return response($resume, Response::HTTP_CREATED);
    }

    private function savePicture($blob)
    {
        $img = Image::make($blob);
        $fileName = Str::uuid() . '.' . explode('/', $img->mime())[1];
        $filePath = "/storage/pictures/$fileName";
        $img->save(public_path($filePath));
        return $filePath;
    }

    public function edit(Resume $resume)
    {
        $this->authorize('update', $resume);

        return view('resumes.edit', ['resume' => json_encode($resume)]);
    }

    public function update(StoreResume $request,Resume $resume)
    {
        $this->authorize('update', $resume);

        $data = $request->validated();
        $picture = $data['content']['basics']['picture'];
        if ($picture !== $resume->content['basics']['picture']) {
            $uri = $this->savePicture($picture);
            $data['content']['basics']['picture'] = $uri;
        }

        $resume->update($data);

        Session::flash('alert', [
            'type' => 'success',
            'messages' => ["Resume $resume->title updated successfully"]
        ]);

        return response(status: Response::HTTP_OK);
    }

    public function destroy(Resume $resume)
    {
        $this->authorize('delete', $resume);
        $resume->delete();

        return redirect()->route('resumes.index')->with('alert', [
            'type' => 'success',
            'messages' => ["Resume $resume->title deleted successfully"]
        ]);
    }
}
