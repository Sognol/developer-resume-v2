@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="border rounded">
            <div class="container my-3">
                @if (isset($publication))
                    <form action="{{ route('publications.update', $publication->id) }}" method="POST">
                    @method('PUT')
                @else
                    <form action="{{ route('publications.store') }}" method="POST">
                @endif
            
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Resume <i class="fa-solid fa-file"></i></label>
                            <select id="resume" name="resume_id" class="form-control">
                                @foreach ($resumes as $resume)
                                    @if (isset($publication) && $publication->resume->id === $resume->id)
                                        <option selected value="{{ $resume->id }}">{{ $resume->title }}</option>
                                    @else
                                        <option value="{{ $resume->id }}">{{ $resume->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Theme <i class="fa-solid fa-palette"></i></label>
                            <select id="theme" name="theme_id" class="form-control">
                                @foreach ($themes as $theme)
                                @if (isset($publication) && $publication->theme->id === $theme->id)
                                    <option selected value="{{ $theme->id }}">{{ $theme->theme }}</option>
                                @else
                                    <option value="{{ $theme->id }}">{{ $theme->theme }}</option>
                                @endif
                            @endforeach
                            </select>    
                        </div>

                        <div class="form-group col-md-4">
                            <label>Visibility <i class="fa-solid fa-user-secret"></i></label>
                            <select name="visibility_id" class="form-control">
                                @foreach (['public', 'private', 'hidden'] as $visibility)
                                @if (isset($publication) && $publication->visibility === $visibility)
                                    <option selected value="{{ $visibility }}">{{ $visibility }}</option>
                                @else
                                    <option value="{{ $visibility }}">{{ $visibility }}</option>
                                @endif
                            @endforeach
                            </select>    
                        </div>
                    </div>
                    <div class="mx-auto" style="width: 80px;">
                        <button class="btn btn-success" style="width: 80px;" type="submit">
                             Save <i class="fa-solid fa-floppy-disk"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-3">
            <iframe id="iframe" class="border rounded w-100" style="height: 650px;"></iframe>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const iframe = document.getElementById('iframe');

        async function loadPreview(resume, theme) {
            iframe.srcdoc = '<h1>Loading theme...</h1>'
            console.log(resume, theme);
            try {
                const res = await axios.post(route('publications.preview'), {
                    resume_id: resume,
                    theme_id: theme,
                });
                iframe.srcdoc = res.data;
            } catch (e) {
                console.log(e);
            }
        }

        const resume = document.getElementById('resume');
        const theme = document.getElementById('theme');

        await loadPreview(resume.value, theme.value);

        resume.onchange = async (e) => await loadPreview(e.target.value, theme.value);
        theme.onchange = async (e) => await loadPreview(resume.value, e.target.value);

    });
</script>