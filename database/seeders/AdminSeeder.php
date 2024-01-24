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
        'username' => 'UlisesDFUWU',
        'password' => bcrypt('ulises2415'),
    ]);

    user::create([
      'name' => 'Malwadisco',
      'username' => 'malvadisco',
      'password' => bcrypt('221910'),
  ]);

    $this->command->info('Super Admin creado exitosamente.');
    }
}
