<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    public function index(){
        return view('frontend.dashboard.profile.index');
    }
    public function updateProfile(Request $request){
        $request->validate([
            'name' => ['required','max:100'],
            'email' => ['email','unique:users,email,'.Auth::user()->id],
            'image' => ['image','max:2048']
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')){
            if (File::exists(public_path('uploads/profile_image/'.Auth::user()->image))){
                File::delete(public_path('uploads/profile_image/'.Auth::user()->image));
            }
            $image = $request->image;
            $imageName = rand().'_'.$image->getclientOriginalName();
            $image->move(public_path('/uploads/profile_image/'), $imageName);
            $user->image = $imageName;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success');
    }

    public function updateProfilePassword(Request $request){
        $request->validate([
            'current_password' => ['required','current_password'],
            'password' => ['required','confirmed','min:8']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);
        return redirect()->back()->with('success');

    }
}
