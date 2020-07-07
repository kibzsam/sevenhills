<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
            'employeeName' => 'Admin',
            'email' => 'admin@gmail.com',
            'employeeID' =>Str::random(10),
            'role'=>'admin',
            'faculty' =>Str::random(20),
            'flocation' =>Str::random(20),
            'password' => Hash::make('password'),
        ]);
    }
}
