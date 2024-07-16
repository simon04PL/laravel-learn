@extends('layouts.app')

@section('content')
<div class="container">
    <div class="photo--container">
        <div class="photo--details">
            <img src="/storage/{{$post->image}}" class="photo-detail_img" />
        </div>
        <div class="photo--info">
            <div class="photo--info_user--all">
                <div class="photo--info_user">
                    <div class="photo--info_user-logo">
                        <img src="/storage/{{$post->user->profile->image}}" class="photo photo--logo-small" width="100" />
                    </div>
                    <div class="photo--info_user-details">
                        <h3>{{$post->user->username}}</h3>
                        <a href="/profile/{{$post->user->id}}" class="photo--info_user-link">visit profile</a>
                    </div>
                </div>

                <p>{{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
@endsection
