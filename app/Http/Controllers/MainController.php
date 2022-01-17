<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function getMain()
    {
        $user = \App\Models\User::first();
        $profile = \App\Models\Profile::first();
        if (!empty($profile->instagram)) {
            $url = $profile->instagram;
            $url_get = substr(strrchr($url, "/"), 1);
        } else {
            $url_get = "";
        }
        if (!empty($profile->education)) {
            $educations = explode(';', $profile->education);
        } else {
            $educations = "";
        }
        if (!empty($profile->skills)) {
            $skills = explode(',', $profile->skills);
        } else {
            $skills = "";
        }
        return view('pages.main', compact('user', 'profile', 'url_get', 'educations', 'skills'));
    }
}
