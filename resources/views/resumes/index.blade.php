@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($resumes as $resume)
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title text-capitalize">
                                {{ $resume->title }}
                            </h3>
                            <p>
                                {{ $resume->content['basics']['summary'] ?? 'No summary' }}
                            </p>
                            <p>
                                {{ $resume->create_at }}
                            </p>
                            <div class="d-lg-inline-flex">
                                <div>
                                    <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary mb-2">
                                        <i class="fa-solid fa-code-pull-request"></i>
                                        Edit
                                    </a>
                                </div>
                                <div class="ml-lg-2">
                                    <form method="POST" action="{{ route('resumes.destroy', $resume->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-meteor"></i>
                                            Destroy
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
