@extends('layouts.app')

@section('content')
<div class="container">
    <div class="photo--container">
        <div class="photo--details">
            <img src="/storage/{{$post->image}}" class="photo--details_img" />
        </div>
        <div class="photo--info">
            <div class="photo--info_user--all">
                <div class="photo--info_user">
                    <div class="photo--info_user-logo">
                        <img src="{{$user->profile->profileImage()}}" class="photo photo--logo-small" width="40" />
                    </div>
                    <div class="photo--info_user-details">
                        <a href="/profile/{{ $post->user->id}}" class="profile--link">
                            <span class="profile--link-dark">
                                <strong>{{$post->user->username}}</strong>
                            </span>
                        </a>
                        <a href="#" class="profile--follow">Follow</a>
                    </div>
                </div>

                <hr/>

                <p>
                    <a href="/profile/{{ $post->user->id}}" class="profile--link">
                        <span class="profile--link-dark">
                            <strong>{{$post->user->username}}</strong>
                        </span>
                    </a> 
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
