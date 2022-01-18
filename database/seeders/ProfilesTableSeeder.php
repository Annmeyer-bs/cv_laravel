<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profiles')->insert([
            'phone' => '+380502833945',
            'photo' => 'photo/wO0vs8kQugMquxUBUmsJ1mzQODhEqxHcDDh9gWS9.jpg',
            'country' => 'Ukraine, Zaporizhzhia',
            'instagram' => 'https://www.instagram.com/annmeyer_bs',
            'education' => 'Bachelor,
software development and testing specialist,
ZNTU,
from 2015 to 2018;
Junior specialist,
technician - programmer,
ZEC ZNTU,
from 2011 to 2015;',
            'skills' => 'html,php,css,sql',
            'profile' => 'I developed a project - my resume with registration and authorization of users and displaying their resume.',
            'prof_exp' => 'Trainee PHP Developer, PixelTeh, 21.12.21'
        ]);
    }
}
