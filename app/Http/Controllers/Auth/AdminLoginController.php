<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminLoginController extends Controller
{
    public function index(): View
    {
        return view('admin.auth.login');
    }

    public function login(AdminLoginRequest $request): RedirectResponse
    {

        if (!Auth::guard('admin')->attempt($request->validated())) {
            return redirect()->back()->withErrors([
                'email' => 'Неверный email',
                'password' => 'Неверный пароль',
            ])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('admin.home');
    }
}
