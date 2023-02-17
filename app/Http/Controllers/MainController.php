<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MainController extends Controller
{
    // Login
    public function login()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }
    // Register
    public function register()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('succes', 'Registration succesfull! Please login');
    }

    public function authenticate(Request $request)
    {
       $credentials = $request->validate(([
       'email' => 'required|email:dns',
       'password' => 'required'
        ]));

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login failed');
    }
    //
    //
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'active' => 'home'
        ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'About',
            'active' => 'about'
        ]);
    }
    public function service()
    {
        return view('service', [
            'title' => 'Service',
            'active' => 'service'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
            'active' => 'contact'
        ]);
    }
}
