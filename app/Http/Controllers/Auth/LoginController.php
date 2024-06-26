<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index(): RedirectResponse|View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (!Auth::guard('user')->attempt($request->validated())) {
            return redirect()->back()->withErrors([
                'email' => 'Неверный email',
                'password' => 'Неверный пароль',
            ])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('posts.index');
    }
}
