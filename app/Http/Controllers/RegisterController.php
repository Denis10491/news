<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\SignupRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): RedirectResponse|View
    {
        return (auth()->user()) ? redirect()->route('home') : view('register');
    }

    public function signup(SignupRequest $request): RedirectResponse
    {
        User::query()->create($request->validated());
        return redirect()->route('home');
    }
}
