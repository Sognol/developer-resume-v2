<?php

use App\Http\Resources\ResumeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Resume;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/resumes', fn() => new ResumeResource(auth()->user()->resumes->all()))->middleware('auth:sanctum');

Route::get('/resumes/{resume}', function(Resume $resume) {
    if( auth()->user()->id != $resume->user->id) {
        return response(status: 403)->json(['message' => 'Unauthorized']);
    }

    return new ResumeResource($resume);
})->middleware('auth:sanctum');