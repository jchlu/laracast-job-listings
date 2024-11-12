<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }
  public function store()
  {
    // Validate
    $validUser = request()->validate([
      "first_name" => 'required|string|max:255|min:3',
      "last_name" => 'required|string|max:255',
      'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
      "password" => ['required', Password::min(8)->letters()->numbers(), 'confirmed'],
    ]);
    // Store user
    $user = User::create($validUser);
    // login
    Auth::login($user);
    // redirect
    return redirect('/jobs');
  }
}
