@extends('layouts.app')

@section('content')
<div class="container">
    <div class="profile-info_profile">
        <div class="logo">
            <div class="logo_main">
                <img class="photo" src="{{$user->profile->profileImage()}}" width="100"/>
            </div>
        </div>
        <div class="profile-info_details">
            @if($user->username && isset($user->username))
                <div class="profile-info--usernamefollow">
                    <h4>{{ $user->username}}</h4>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create" class="new-post_btn">add new post</a>
                @endcan
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit" class="edit-profile_btn">edit profile</a>
                @endcan
            @endif
            <div class="profile-info_account-details">
                <p>posty: <strong>{{ $user->posts->count() }}</strong></p>
                <p>followers: <strong>{{ $user->profile->followers->count() }}</strong></p>
                <p>following: <strong>{{ $user->following->count() }}</strong></p>
            </div>
            <div class="profile-info_info">
                @if($user->profile->title && isset($user->profile->title))
                    <span class="profile-info_info_title"><strong>{{ $user->profile->title }}</strong></span>
                @endif
                @if($user->profile->description && isset($user->profile->description))
                    <span class="profile-info_info_description">{{ $user->profile->description }}</span>
                @endif
                @if($user->profile->url && isset($user->profile->url))
                    <span class="profile-info_info_url"><a href="{{$user->profile->url}}">{{ $user->profile->url }}</a></span>
                @endif
            </div>
        </div>
    </div>

    <div class="photo">
        @foreach ($user->posts as $post)
            <div class="photo_listing">
                <a href="/p/{{ $post->id}}">
                    <img src="/storage/{{$post->image}}" width="400" height="400"/>
                </a>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
