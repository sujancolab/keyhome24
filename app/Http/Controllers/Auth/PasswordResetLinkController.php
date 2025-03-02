<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create()//: Response
    {
        // return Inertia::render('Auth/ForgotPassword', [
        //     'status' => session('status'),
        // ]);
        return view('forgot-password');
    }
    public function sendOtp(Request $request)
    {
        // dd($request->all());
        $request->validate(['email' => 'required|email|exists:users,email']);

        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);
        Log::info('OTP for ' . $request->email . ': ' . $otp);

        // Store OTP in Cache for 5 minutes
        Cache::put('otp_' . $request->email, $otp, now()->addMinutes(5));

        // Send OTP via Email
        Mail::to($request->email)->send(new OtpMail($otp));

        return view('passwords.otp')->with(['email' => $request->email]);
    }

    // ✅ Step 2: Verify OTP and Reset Password
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|digits:6',
            'password' => 'required|min:6|confirmed'
        ]);

        // Retrieve OTP from Cache
        $cachedOtp = Cache::get('otp_' . $request->email);

        if (!$cachedOtp || $cachedOtp != $request->otp) {
            return back()->with('error', 'Invalid or expired OTP');
        }

        // OTP verified, update password
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Clear OTP from cache
        Cache::forget('otp_' . $request->email);

        return redirect()->route('login')->with('success', 'Password reset successfully!');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
    }
}
