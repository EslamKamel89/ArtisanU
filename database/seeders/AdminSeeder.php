<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'password',
        ]);
        Admin::create([
            'name' => 'eslam',
            'email' => 'eslamkamelforex@gmail.com',
            'password' => 'password',
        ]);
    }
}
