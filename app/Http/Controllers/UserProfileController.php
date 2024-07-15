<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    //

    public function index($name)
    {
        $user = User::where('name_en', $name)->firstOrFail();

        // Ensure the authenticated user is the owner of the card being accessed
        if (Auth::user()->email !== $user->email) {
            abort(403, 'Unauthorized action.');
        }
        return view('userprofile', compact('user'));
    }

    public function edit($name)
    {
        $user = User::where('name_en', $name)->firstOrFail();

        if (Auth::user()->email !== $user->email) {
            abort(403, 'Unauthorized action.');
        }

        return view('editUserProfile', compact('user'));
    }

    public function update(Request $request, $name)
{
    $user = User::where('name_en', $name)->firstOrFail();

    if (Auth::user()->email !== $user->email) {
        abort(403, 'Unauthorized action.');
    }

    $request->validate([
        'name_en' => 'required|string|max:255',
        'name_ar' => 'nullable|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5048',
        'phone_number' => 'nullable|string|max:20',
        'whatsapp' => 'nullable|string|max:20',
        'instagram' => 'nullable|string|max:50',
        'facebook' => 'nullable|string|max:50',
        'youtube' => 'nullable|string|max:50',
        'twitter' => 'nullable|string|max:50',
        'snapchat' => 'nullable|string|max:50',
        'data' => 'nullable|string',
    ]);

    $user->name_en = $request->name_en;
    $user->name_ar = $request->name_ar;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    if ($request->hasFile('image')) {
        // Handle file upload using Storage facade
        $uploadedImage = $request->file('image');
        $filename = basename($uploadedImage->store('uploads/users', 'public'));

        // Delete old image if it exists
        if ($user->image) {
            Storage::disk('public')->delete('uploads/users/' . $user->image);
        }

        $user->image = $filename;
    }

    // Update user data relations
    $user->userData->phone_number = $request->phone_number;
    $user->userData->whatsapp = $request->whatsapp;
    $user->userData->instagram = $request->instagram;
    $user->userData->facebook = $request->facebook;
    $user->userData->youtube = $request->youtube;
    $user->userData->twitter = $request->twitter;
    $user->userData->snapchat = $request->snapchat;
    $user->userData->data = $request->data;

    $user->push();

    return redirect()->route('userprofile.index', ['name' => $user->name_en])->with('success', 'Profile updated successfully');
}
}
