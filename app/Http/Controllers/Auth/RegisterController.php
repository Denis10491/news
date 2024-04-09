<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignupRequest;
use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index(): RedirectResponse|View
    {
        return (auth()->user()) ? redirect()->route('home') : view('register');
    }

    public function signup(SignupRequest $request): RedirectResponse
    {
        $user = User::query()->create($request->validated());
        
        Mail::to($user)->queue(new WelcomeEmail($user));

        return redirect()->route('home');
    }
}
