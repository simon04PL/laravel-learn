@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <h1>
                <strong>Edit profile</strong>
            </h1>
        </div>

        <div class="row">
            <div class="row mb-3">
                <label for="title" class="col-md-4 col-form-label">
                    <strong>Title</strong>
                </label>
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label">
                    <strong>description</strong>
                </label>
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="row mb-3">
                <label for="url" class="col-md-4 col-form-label">
                    <strong>URL</strong>
                </label>
                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">
                <strong>Profile Image</strong>
            </label>
            <input type="file" class="form-control-file" id="image" name="image">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <button class="btn btn-primary btn-add-post">
                <strong>Save Profile</strong>
            </button>
        </div>
    </form>
</div>
@endsection
