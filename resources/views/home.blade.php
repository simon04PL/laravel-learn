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
            <h1>{{ Auth::user()->name }}</h1>
            <div class="profile-info_account-details">
                <p>id: <strong>{{ Auth::user()->id }}</strong></p>
                <p>utworzony: <strong>{{ Auth::user()->created_at }}</strong></p>
                <p>ostatnia zmiana: <strong>{{ Auth::user()->updated_at }}</strong></p>
            </div>
            <span class="profile-info_mail">{{ Auth::user()->email }}</span>
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
