<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([
            'email' => 'student@gmail.com',
            'name' => 'student',
            'role' => UserRole::student,
            'password' => 'password',
        ]);
        User::create([
            'email' => 'instructor@gmail.com',
            'name' => 'instructor',
            'role' => UserRole::instructor,
            'password' => 'password',
        ]);
    }
}
