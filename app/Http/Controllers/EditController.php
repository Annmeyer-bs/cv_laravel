<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function showEdit()
    {
        $user = \App\Models\User::first();
        $profile = \App\Models\Profile::first();
        return view('pages.edit', compact('user', 'profile'));
    }
}
