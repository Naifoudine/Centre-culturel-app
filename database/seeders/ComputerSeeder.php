<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Computer::create([
                "nom_pc" => $faker->domainWord(),
                "Adresse_ip" => $faker->localIpv4()
            ]);
        }
    }
}