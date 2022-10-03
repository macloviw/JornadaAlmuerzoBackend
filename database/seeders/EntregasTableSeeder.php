<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Entregas;

class EntregasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Entregas::truncate();

        $faker = \Faker\Factory::create("es_ES");

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Entregas::create([
                'Nombre' => $faker->firstName,
                'Apellidos' => $faker->lastName,
                'Telefono' => $faker->phoneNumber,
                'CorreoElectronico' => $faker->freeEmail,
                'Edad' => $faker->numberBetween(16, 100),
                'Direccion' => $faker->paragraph,
                'ComidaEntregada' => $faker->numberBetween(0, 1),
                'Observacion' => $faker->paragraph,
            ]);
        }
    }
}
