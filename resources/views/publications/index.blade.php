@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($publications as $publication)
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title text-capitalize" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
                                {{ $publication->resume->title }}
                            </h3>
                            <a href="{{ $publication->url }}">{{ $publication->url }}</a>
                            <p>
                                {{ $publication->created_at }}
                            </p>
                            <div class="d-lg-inline-flex">
                                <div>
                                    <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-primary mb-2">
                                        <i class="fa-solid fa-code-pull-request"></i>
                                        Edit Publication
                                    </a>
                                </div>
                                <div class="ml-lg-2">
                                    <form method="POST" action="{{ route('publications.destroy', $publication->id) }}">
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
