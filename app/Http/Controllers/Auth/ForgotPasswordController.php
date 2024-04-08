<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Mail\GeneratedPasswordEmail;
use App\Mail\GeneratePasswordEmail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ForgotPasswordController extends Controller
{
    public function index(): View
    {
        return view('forgot');
    }

    public function forgot(ForgotPasswordRequest $request): RedirectResponse
    {
        $credentials = $request->validated();
        $user = User::query()->where('email', '=', $credentials['email'])->first();

        if (!$user) {
            return redirect()->back()
                ->withErrors([
                    'email' => __('validation.email.exists')
                ])
                ->withInput();
        }

        $password = Str::password();

        $user->update(['password' => $password]);
        Mail::to($user)->queue(new GeneratePasswordEmail($user, $password));

        return redirect()->route('auth.login.index');
    }
}
