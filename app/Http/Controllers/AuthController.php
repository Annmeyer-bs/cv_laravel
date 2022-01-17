<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogIn()
    {
        return view('auth.login');
    }

    public function showLogOut()
    {
        auth("web")->logout();
        return redirect(route("login"));
    }

    public function showRegistration()
    {
        return view('auth.register');
    }

    public function registration(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "unique:users,email"],
            "login" => ["required"],
            "password" => ["required", "confirmed"]
        ]);
        $user = User::create([
            "email" => $data["email"],
            "login" => $data["login"],
            "password" => bcrypt($data["password"])
        ]);
        if ($user) {
            auth("web")->login($user);
        }
        return redirect(route("main"));
    }

    public function logIn(Request $request)
    {
        $data = $request->validate([
            "login" => ["required"],
            "password" => ["required"]
        ]);

        if (auth("web")->attempt($data)) {
            return redirect(route("main"));
        }

        return redirect(route("login"))->withErrors(["email" => "User not find, or ..."]);
    }
}
