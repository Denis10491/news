<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contacts\SendContactRequest;
use App\Mail\ContactEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contacts.contact');
    }

    public function send(SendContactRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        Mail::to($credentials['email'])->queue(new ContactEmail($credentials['text'], $credentials['email']));

        return redirect()->back();
    }
}
