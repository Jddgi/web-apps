<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'Juandd200511@gmail.com'],
            [
                'name' => 'Juan Guzman',
                'password' => Hash::make('Batman2005+'),
            ]
        );
    }
}
