<?php

namespace Database\Factories;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComputerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nom_pc' => $this->faker->domainWord(),
            'Adresse_ip' => $this->faker->localIpv4(),
            'created_at' => now()

        ];
    }
}
