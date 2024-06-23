@extends('layouts.app')

@section('content')
<div class="container">
    <div class="profile-info_profile">
        <div class="logo">
            <div class="logo_main">
                <img src="https://placehold.co/150x150?text=Hello+World" />
            </div>
        </div>
        <div class="profile-info_details">
            @if($user->username && isset($user->username))
                <h1>{{ $user->username}}</h1>
            @endif
            <div class="profile-info_account-details">
                @if($user->id)
                    <p>id: <strong>{{ $user->id }}</strong></p>
                @endif
                @if($user->created_at)
                    <p>utworzony: <strong>{{ $user->created_at }}</strong></p>
                @endif
                @if($user->updated_at)
                    <p>ostatnia zmiana: <strong>{{ $user->updated_at }}</strong></p>
                @endif
            </div>
            <div class="profile-info_info">
                @if($user->profile->title)
                    <span class="profile-info_info_title"><strong>{{ $user->profile->title }}</strong></span>
                @endif
                @if($user->profile->description)
                    <span class="profile-info_info_description">{{ $user->profile->description }}</span>
                @endif
                @if($user->profile->url)
                    <span class="profile-info_info_url"><a href="{{$user->profile->url}}">{{ $user->profile->url }}</a></span>
                @endif
            </div>
        </div>
    </div>

    <div class="photo">
        <div class="photo_listing">
            <img src="https://placehold.co/400x400?text=Hello+World" />
        </div>
        <div class="photo_listing">
            <img src="https://placehold.co/400x400?text=Hello+World" />
        </div>
        <div class="photo_listing">
            <img src="https://placehold.co/400x400?text=Hello+World" />
        </div>
    </div>
</div>
@endsection
