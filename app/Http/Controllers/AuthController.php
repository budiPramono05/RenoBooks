<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use App\Models\User;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // ✅ VALIDASI
        $validated = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|min:6|confirmed',
            'address'    => 'required|string',
            'phone'      => 'required|string|max:20',
        ]);

        // ✅ SIMPAN USER
        $user = User::create([
        'name'     => $validated['first_name'] . ' ' . $validated['last_name'],
        'email'    => $validated['email'],
        'password' => Hash::make($validated['password']),
        'alamat'   => $validated['address'], // ✅ mapping
        'no_telp'  => $validated['phone'],   // ✅ mapping
        'role'     => 'user',                 // ✅ default role
    ]);

        // ✅ AUTO LOGIN SETELAH REGISTER
        Auth::login($user);

        // ✅ DEBUG LOG
        Log::info('User registered:', $user->toArray());

        return redirect()->route('login');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    Log::debug('Credentials login:', $credentials);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $request->session()->put('user_email', Auth::user()->email);
        $request->session()->put('user_name', Auth::user()->name);
        $request->session()->put('user_id', Auth::id());

        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah'
    ])->withInput();
}

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/login');
    // }
}
