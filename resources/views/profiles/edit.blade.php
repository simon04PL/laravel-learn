@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="row">
            <h1>
                <strong>Add New Post</strong>
            </h1>
        </div>

        <div class="row">
            <div class="row mb-3">
                <label for="caprion" class="col-md-4 col-form-label">
                    <strong>Post Caption</strong>
                </label>
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <label for="image" class="col-md-4 col-form-label">
                <strong>Post Image</strong>
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
                <strong>Add New Post</strong>
            </button>
        </div>
    </form>
</div>
@endsection
