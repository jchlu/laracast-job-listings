<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
  public function create()
  {
    return view('auth.login');
  }

  public function store()
  {
    // Validate
    $credentials = request()->validate([
      "email" => ['required', 'email', 'max:254'],
      "password" => ['required', Password::min(8)->letters()->numbers()],
    ]);
    // login
    if (!Auth::attempt($credentials)) {
      throw ValidationException::withMessages([
        'email' => 'Sorry, those credentials do not match'
      ]);
    }
    request()->session()->regenerate();
    // redirect
    return redirect('/jobs');
  }
  public function destroy()
  {
    Auth::logout();
    return redirect('/');
  }
}
