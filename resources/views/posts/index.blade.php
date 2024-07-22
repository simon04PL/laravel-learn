@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="photo--container">
            <div class="photo--details">
                <a href="/profile/{{ $post->user->id}}" class="profile--link">
                    <img src="/storage/{{$post->image}}" class="photo--details_img" />
                </a>
            </div>
        </div>
        <div class="photo--main-listing">
            <div class="photo--info">
                <div class="photo--info_user--all">

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
    @endforeach

    <div class="photo--more">
        <div class="photo--more--btn">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
