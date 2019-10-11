<?php

use Illuminate\Database\Seeder;

class PrestacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Odontología",
            "sede_id" => 1
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Pediatría",
            "sede_id" => 1
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Medicina General",
            "sede_id" => 1
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Rayos X",
            "sede_id" => 2
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Vacunación",
            "sede_id" => 2
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Medicina General",
            "sede_id" => 3
        ]);

        $prestacion = factory(App\Models\Prestacion::class)->create([
            "nombre" => "Rayos X",
            "sede_id" => 3
        ]);
    }
}
