<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Parametro;

class ParametroFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Parametro::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'DBO_5' => $this->faker->randomFloat(8, 0, 100),
      'DQO' => $this->faker->randomFloat(8, 0, 100),
      'SST' => $this->faker->randomFloat(3, 0, 100),
      'St' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A1' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A2' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A3' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A4' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A5' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A6' => $this->faker->randomFloat(3, 0, 100),
      'G_y_A_PP' => $this->faker->randomFloat(3, 0, 100),
      'SAAM' => $this->faker->randomFloat(3, 0, 100),
      'NOK' => $this->faker->randomFloat(3, 0, 100),
      'NAK' => $this->faker->randomFloat(3, 0, 100),
      'NTK' => $this->faker->randomFloat(3, 0, 100),
      'FENOL' => $this->faker->randomFloat(3, 0, 100),
      'COLOR' => $this->faker->randomFloat(3, 0, 100),
      'Cr+6' => $this->faker->randomFloat(3, 0, 100),
      'CN' => $this->faker->randomFloat(3, 0, 100),
      'PT' => $this->faker->randomFloat(3, 0, 100),
      'Cu' => $this->faker->randomFloat(3, 0, 100),
      'Ni' => $this->faker->randomFloat(3, 0, 100),
      'Cd' => $this->faker->randomFloat(3, 0, 100),
      'Zn' => $this->faker->randomFloat(3, 0, 100),
      'Pb' => $this->faker->randomFloat(3, 0, 100),
      'Cr' => $this->faker->randomFloat(3, 0, 100),
      'Fe' => $this->faker->randomFloat(3, 0, 100),
      'Ag' => $this->faker->randomFloat(3, 0, 100),
      'Ai' => $this->faker->randomFloat(3, 0, 100),
      'Hg' => $this->faker->randomFloat(3, 0, 100),
      'As' => $this->faker->randomFloat(3, 0, 100),
      'Se' => $this->faker->randomFloat(3, 0, 100),
      'B' => $this->faker->randomFloat(3, 0, 100),
      'Sn' => $this->faker->randomFloat(3, 0, 100),
      'Coliformes_Fecales_NMP' => $this->faker->randomFloat(3, 0, 100),
      'Coliformes_Totales' => $this->faker->randomFloat(3, 0, 100),
      'pH' => $this->faker->randomFloat(3, 0, 100),
      'SDT' => $this->faker->randomFloat(3, 0, 100),
      'SSe' => $this->faker->randomFloat(3, 0, 100),
      'conductividad' => $this->faker->randomFloat(3, 0, 100),
      'Alcalinidas' => $this->faker->randomFloat(3, 0, 100),
    ];
  }
}
