<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Log;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Log::create([
                'action' => 'User Logged In.',
                'description' => 'User logged in admin panel with email : ' . Auth::user()->email,
                'user_id' => Auth::user()->id
            ]);
            return redirect()->route('admin.dashboard');
        }
        Log::create([
            'action' => 'Unknown Tried to Login !.',
            'description' => 'An Unknown User Tried logged in admin panel with email ' . $request->email,
            // 'user_id' => Auth::user()->id
        ]);
        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }
    // public function updatePassword(Request $request){
    //     $validatedData = $request->validate([
    //         'new_password' => 'required|min:6',
    //         'confirm_password' => 'required|same:new_password',
    //     ]);
    //     $user = auth()->user();
    //     if (Hash::check($request->new_password, $user->password)) {
    //         return redirect()->back()->withErrors(['new_password' => 'New password should be different from the current password']);
    //     }
    //     $user->password = Hash::make($validatedData['new_password']);
    //     $user->save();
    //     return redirect()->back()->with('success', 'Password updated successfully');
    // }
    public function updatePassword(Request $request, $id)
    {
        $validatedData = $request->validate([
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);
        $user = auth()->user();
        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->withErrors(['new_password' => 'New password should be different from the current password']);
        }
        $user->password = Hash::make($validatedData['new_password']);
        $user->save();
        Log::create([
            'action' => Auth::user()->name.'- Changed Password.',
            'description' => 'User changed the password of admin panel with email : ' . Auth::user()->email,
            'user_id' => Auth::user()->id
        ]);
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Password updated successfully. Please login with your new password.');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
