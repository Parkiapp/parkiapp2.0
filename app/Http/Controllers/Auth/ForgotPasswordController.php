<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendPasswordResetLinkRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\RedirectResponse;

class ForgotPasswordController extends Controller
{
    public function create() {
        return view('auth.forgot-password');
    }

    public function store(SendPasswordResetLinkRequest $request): RedirectResponse
    {
        $status = Password::sendResetLink($request->only('email'));
        return back()->with('status', __($status));
    }
}
