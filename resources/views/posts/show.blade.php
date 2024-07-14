@extends('layouts.app')

@section('content')
<div class="container">
    <div class="photo--container">
        <div class="photo--details">
            <img src="/storage/{{$post->image}}" class="photo-detail_img" />
        </div>
        <div class="photo-info">
            <div class="photo--info_user">
                <h3>{{$post->user->username}}</h3>

                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
