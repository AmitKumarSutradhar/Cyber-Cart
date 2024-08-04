<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.profile.index');
    }
    public function update(Request $request){
        $request->validate([
            'name' => ['required','max:100'],
            'email' => ['email','unique:users,email,'.Auth::user()->id],
            'image' => ['image','max:2048']
        ]);



        $user =  Auth::user();
        if ($request->hasFile('image')){
            if (File::exists(public_path('uploads/'.$user->image))){
                File::delete(public_path('uploads/'.$user->image));
            }
            $image = $request->image;
            $imageName = rand()."_".$image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $path = $imageName;
            $user->image = $path;
        }
        $user->name = $request->name;
        $user->save();

        return redirect()->back();
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => ['required','current_password'],
            'password' => ['required','confirmed','min:8']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back();
    }

}
