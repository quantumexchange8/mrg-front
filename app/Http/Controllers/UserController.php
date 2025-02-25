<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function register()
    {
        return view('Auth/register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email address is already registered.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 6 characters long.',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function login()
    {
        return view('Auth/login');
    }

    public function authenticate(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login successful');
        } else {
            return back()->withErrors([
                'error' => 'The email or password entered is incorrect, please try again.',
            ]);
        }
    }

    public function forgotPW()
    {
        return view('Auth/forgotpassword');
    }

    public function handleForgotPW(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!empty($user)) {
            $user->remember_token = Str::random(40);
            $user->save();
            Mail::to($user->email)->send(new ForgotPassword($user));
            return redirect()->route('forgotPW')->with([
                'success' => 'Please check your email to reset the password',
            ]);
        } else {
            return redirect()->route('forgotPW')->withErrors([
                'error' => 'The email is not found',
            ]);
        }
    }

    public function reset($token)
    {
        $user = User::where('remember_token', $token)->first();

        if (!empty($user)) {
            $data['user'] = $user;
            return view('Auth/reset', $data);
        }

        return redirect()->route('forgotPW')->withErrors([
            'error' => 'The reset link has been expired',
        ]);
    }

    public function handleReset($token, Request $request)
    {

        $user = User::where('remember_token', $token)->first();

        if (!empty($user)) {
            if ($request->password === $request->cfmPassword) {
                $user->password = Hash::make($request->password);
                if (empty($user->email_verified_at)) {
                    $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(40);
                $user->save();
                return redirect()->route('login')->with('success', 'Password has been successfully reset.');
            } else {
                return redirect()->back()->with('error', 'Password and Confirm Password are not matched.');
            }
        }

        return redirect()->route('forgotPW')->withErrors([
            'error' => 'The reset link has been expired',
        ]);    }


    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
