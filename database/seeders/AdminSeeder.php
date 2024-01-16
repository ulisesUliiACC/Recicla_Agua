<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      user::create([
        'name' => 'Ulises Ulii uwu',
        'email' => 'ulises@test.com',
        'password' => bcrypt('ulises2415'),
    ]);

    $this->command->info('Super Admin creado exitosamente.');
    }
}
