<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];
        
        for ($i = 1; $i <= 30; $i++) {
            $users[] = [
                'name' => "User $i",
                'email' => "user$i@example.com",
                'password' => Hash::make('password'),
                'role' => $i % 5 === 0 ? 'admin' : 'user', // Setiap user ke-5 menjadi admin
                'profile_picture' => "/storage/profile_pictures/userpic$i.png",
                'instagram' => "https://instagram.com/user$i",
                'x' => "https://x.com/user$i",
                'linkedin' => "https://linkedin.com/in/user$i",
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        DB::table('users')->insert($users);
    }
}
