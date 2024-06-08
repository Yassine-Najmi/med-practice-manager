<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminEmail = 'admin@admin.com';
        $adminExists = User::where('email', $adminEmail)->exists();
        if (!$adminExists) {
            User::create([
                "name" => "Admin",
                'email' => $adminEmail,
                'password' => Hash::make("password"),
                'is_admin' => true,
            ]);
        }
    }
}
