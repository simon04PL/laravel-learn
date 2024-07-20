<?php

namespace App\Http\Controllers;

use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        return view('profiles.index', compact('user', 'follows'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');

            $manager = new ImageManager(new Driver());
            $image = $manager->read(public_path("storage/{$imagePath}"))->resize(1000, 1000);
            $image->save();
        }

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect("/profile/{$user->id}");
    }
}
