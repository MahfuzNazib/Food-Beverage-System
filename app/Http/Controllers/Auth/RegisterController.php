<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registration()
    {
        return view('auth.register');
    }

    public function registration_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users|min:11|max:14',
            'password' => 'required|min:6}max:8',
            'confirm_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->image= null;
        $user->role_id = 99; // define 99 as customers role;
        $user->password = Hash::make($request->password);
        $user->save();

        // Data store on users details table
        $user_details = new UserDetails();
        $user_details->user_id = $user->id;
        $user_details->email = $request->email;
        $user_details->save();

        return redirect()->route('login.show');

    }
}
