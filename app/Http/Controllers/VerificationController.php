<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
    //
    public function showVerification()
    {
        return view('auth.verify-email');
    }

    public function verification(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/inicio');
    }

    public function sendEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Link de verificación enviado!');
    }
}
