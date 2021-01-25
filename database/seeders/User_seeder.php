<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'abhi kumawat',
            "email" => "abhi@gmail.com",
            "password" => Hash::make('12345')
        ]);
        DB::table('users')->insert([
            'name' => 'malesh',
            'email' => 'malesh@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
