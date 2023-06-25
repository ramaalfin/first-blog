<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function showChangeForm()
    {
        return view('auth.passwords.reset');
    }

    public function change(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email tidak ditemukan']);
        }

        $user->update([
            'password' => Hash::make($request->password),
            // 'reset_token' => null,
        ]);

        return redirect()->route('login')->with('status', 'Password berhasil diubah');
    }
}
