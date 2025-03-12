<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\RequestModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Credentials
        $credentials = $request->only('email', 'password');

        // Attempt login
        if (Auth::attempt($credentials)) {
            // Regenerate session (for security)
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')->with('success', 'Login successful');
        }

        // Failed authentication
        return back()->withErrors([
            'email' => 'Invalid email or password',
        ])->withInput();
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function posts(){
        $posts=Post::get();
        return view('admin.posts')->with(compact('posts'));
    }
    public function requests(){
        $requests=RequestModel::get();
        return view('admin.requests')->with(compact('requests'));
    }
    public function users(){
        $users=User::where('role','!=','admin')->get();
        return view('admin.users')->with(compact('users'));
    }
}
