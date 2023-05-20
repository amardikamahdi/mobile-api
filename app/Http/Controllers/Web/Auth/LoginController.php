<?php

namespace App\Http\Controllers\Web\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Auth\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request)
    {
        try {
            info($request->validated());
            Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember ?? 0);

            return redirect()->route('dashboard.analytics');
        } catch (\Exception $e) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
