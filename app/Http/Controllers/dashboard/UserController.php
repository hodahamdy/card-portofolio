<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    //
    public function index()
    {
        $users=User::all();
        return view('dashboard.user.index',compact('users'));

    }

    public function create()
    {
        return view('dashboard.user.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'image' => 'required|image|max:5120|mimes:png,jpg,webp,svg',
            'role' => 'required',
            'phone_number' => 'required|max:25|min:11',
            'whatsapp' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'snapchat' => 'nullable|string|max:255',
            'data' => 'required|string',
        ]);
         // Get file details
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $fileName = $validated['name_en'] . uniqid() . ".$extension";

         // Move the file to its folder
         $file->move(public_path('Uploads/User'), $fileName);

        $user = User::create([

            'name_en' => $validated['name_en'],
            'name_ar' => $validated['name_ar'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'image' => $fileName,
            'role' => $validated['role'],

        ]);

        UserData::create([
            'user_id' => $user->id,
            'phone_number' => $validated['phone_number'],
            'whatsapp' => $validated['whatsapp'],
            'instagram' => $validated['instagram'],
            'facebook' => $validated['facebook'],
            'youtube' => $validated['youtube'],
            'twitter' => $validated['twitter'],
            'snapchat' => $validated['snapchat'],
            'data' => $validated['data'],
        ]);

        return redirect()->route('dashboard.user.index')->with('success', 'User created successfully.');
    }
    public function delete(User $id)
    {
        if( $id->image !== null )
        {
            unlink( public_path('Uploads/User/') . $id->image );
        }
        $id->userData->delete();
        $id->delete();
        return redirect( route('dashboard.user.index'));
    }

}
