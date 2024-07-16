@extends('layouts.app')

@section('content')
<div class="container">
    <div class="profile-info_profile">
        <div class="logo">
            <div class="logo_main">
                <img class="photo" src="/storage/{{$user->profile->image}}" width="100"/>
            </div>
        </div>
        <div class="profile-info_details">
            @if($user->username && isset($user->username))
                <h1>{{ $user->username}}</h1>
                @can('update', $user->profile)
                    <a href="/p/create" class="new-post_btn">add new post</a>
                @endcan
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit" class="edit-profile_btn">edit profile</a>
                @endcan
            @endif
            <div class="profile-info_account-details">
                @if($user->id)
                    <p>posty: <strong>{{ $user->posts->count() }}</strong></p>
                @endif
                @if($user->created_at)
                    <p>utworzony: <strong>{{ $user->created_at }}</strong></p>
                @endif
                @if($user->updated_at)
                    <p>ostatnia zmiana: <strong>{{ $user->updated_at }}</strong></p>
                @endif
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
