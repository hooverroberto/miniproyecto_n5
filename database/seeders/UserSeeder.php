<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401092',
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        User::create([
            'first_name' => 'Roberto',
            'last_name' => 'Hoover',
            'email' => 'hoover@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '9632480062',
            'remember_token' => Str::random(10),
        ])->assignRole('teacher');;

        User::create([
            'first_name' => 'Aron',
            'last_name' => 'S',            
            'email' => 'aron@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '521212121',
            'remember_token' => Str::random(10),
        ])->assignRole('teacher');; 
    }
}
