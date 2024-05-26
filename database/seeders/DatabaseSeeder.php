<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        \App\Models\Fournisseur::factory(10)->create();
        \App\Models\Patient::factory(10)->create();
        \App\Models\Employee::factory(10)->create();
        \App\Models\Stock::factory(10)->create();
        $this->call(WeekSeeder::class);
        \App\Models\Time::factory(10)->create();
        \App\Models\Consultation::factory(10)->create();
        $this->call(BusinessHourSeeder::class);
        \App\Models\Appointment::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
