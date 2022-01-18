<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class ProfileController extends Controller
{

    public function update(Request $request)
    {
        $user = User::find(1);
        $profile = Profile::find(1);

        if ((Profile::find(1) == Null)) {
            $profile = new Profile();
        }

        $data = $request->validate([
            "name" => ["sometimes"],
            "email" => ["sometimes"],
            "phone" => ["sometimes"],
            "country" => ["sometimes"],
            "instagram" => ["sometimes"],
            "education" => ["sometimes"],
            "skills" => ["sometimes"],
            "profile" => ["sometimes"],
            "prof_exp" => ["sometimes", "max:255"],
            "photo" => ["sometimes", "image:jpg,jpeg,png"]
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $path = $photo->store('photo', 'public');
            $profile->photo = $path;
            $profile->save();
        }

        $profile->phone = $data["phone"];
        $profile->country = $data["country"];
        $profile->instagram = $data["instagram"];
        $profile->phone = $data["phone"];
        $profile->education = $data["education"];
        $profile->skills = $data["skills"];
        $profile->profile = $data["profile"];
        $profile->prof_exp = $data["prof_exp"];
        $profile->save();

        if (!empty($data["name"] || $data["email"])) {
            $user->name = $data["name"];
            $user->email = $data["email"];
            $user->save();
        }

        return redirect(route("main"));
    }
}
