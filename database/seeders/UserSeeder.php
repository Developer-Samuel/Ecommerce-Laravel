<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Samuel',
            'lname' => 'Šteiner',
            'email' => 'samo@gmail.com',
            'mobile' => '0005005005',
            'password' => Hash::make('000000'),
        ]);
    }
}
