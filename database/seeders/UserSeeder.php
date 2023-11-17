<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => "Kenly Krisaguino Santoso",
            'email'         => "kenly@gmail.com",
            'password'      => "q",
            'address'       => "Semarang",
            'gender'        => "Male",
            'phone'         => "087731335955",
            'birthdate'     => "2003-08-10",
            'birthplace'    => "Semarang",
            'instagram'     => "mkks_1710",
            'email_verified_at' => now(),
        ]);
    }
}
