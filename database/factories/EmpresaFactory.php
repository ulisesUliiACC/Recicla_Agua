<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return [
        'clave' => $this->faker->word,
        'industria' => $this->faker->word,
        'descripcion' => $this->faker->sentence,
        'monitoreo' => $this->faker->numberBetween(0, 1),
        'descarga' => $this->faker->word,
        'horas' => $this->faker->numberBetween(1, 24),
        'tipo' => $this->faker->word,
        'descarga_a' => $this->faker->word,
        'DBO5' => $this->faker->word,
        'DQO' => $this->faker->numberBetween(1, 100),
        'SST' => $this->faker->numberBetween(1, 100),
        'ST' => $this->faker->numberBetween(1, 100),
        'GYA' => $this->faker->numberBetween(1, 100),
        'SAAM' => $this->faker->numberBetween(1, 100),
        'NAK' => $this->faker->numberBetween(1, 100),
        'NOK' => $this->faker->numberBetween(1, 100),
        'NTK' => $this->faker->numberBetween(1, 100),
        'fenol' => $this->faker->word,
        'color' => $this->faker->word,
        'metales' => $this->faker->word,
        'CN' => $this->faker->numberBetween(1, 100),
        'CR+6' => $this->faker->numberBetween(1, 100),
        'CN-6' => $this->faker->numberBetween(1, 100),
        'P-T' => $this->faker->numberBetween(1, 100),
        'Cu' => $this->faker->numberBetween(1, 100),
        'Ni' => $this->faker->numberBetween(1, 100),
        'Cd' => $this->faker->numberBetween(1, 100),
        'Zn' => $this->faker->numberBetween(1, 100),
        'Pb' => $this->faker->numberBetween(1, 100),
        'Cr' => $this->faker->numberBetween(1, 100),
        'Fe' => $this->faker->numberBetween(1, 100),
        'Ag' => $this->faker->numberBetween(1, 100),
        'Al' => $this->faker->numberBetween(1, 100),
        'Hg' => $this->faker->numberBetween(1, 100),
        'As' => $this->faker->numberBetween(1, 100),
        'Se' => $this->faker->numberBetween(1, 100),
        'B' => $this->faker->numberBetween(1, 100),
        'Sn' => $this->faker->numberBetween(1, 100),
        'coliformes_fecales_nmp' => $this->faker->word,
        'coliformes_totales' => $this->faker->word,
        'ph' => $this->faker->numberBetween(0, 14),
        'SDT' => $this->faker->numberBetween(1, 100),
        'SSe' => $this->faker->numberBetween(1, 100),
        'conductividad' => $this->faker->word,
        'alcalinidad' => $this->faker->word,
        'giro_ind' => $this->faker->word,
        'direccion' => $this->faker->address,
        'telefono' => $this->faker->numerify('##########'),
        'atencion' => $this->faker->name,
    ];
    }
}
