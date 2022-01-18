<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }

    public $timestamps = false; // disable all behaviour
    protected $fillable = [
        'phone',
        'country',
        'instagram',
        'education',
        'skills',
        'profile',
        'prof_exp',
        'photo'
    ];
}

