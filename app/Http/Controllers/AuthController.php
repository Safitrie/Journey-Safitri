<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth/index");
    }

    public function register()
    {
        return view("auth/register");
    }

    public function forget()
    {
        return view("auth/forget");
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/auth');
    }

    public function ceklogin(Request $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            return redirect('/auth');
        }
        else
        {
            return redirect('/admin');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }

    public function updatepassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed']
        ]);

        $user = auth()->user();

        if (!$user) {
            return back()->withErrors(['message' => 'User not authenticated']);
        }
    
        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
    
            return redirect('/admin')->with('message', 'Your password has been updated');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Your current password does not match with out record',
        ]);
    }
}
