<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'test',
            'name' => 'Hanna Rozhestvenna',
            'email' => 'hannamyr.bd@gmail.com',
            'password' => bcrypt('111'),
        ]);
    }
}
