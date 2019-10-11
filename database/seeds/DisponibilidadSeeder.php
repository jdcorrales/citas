<?php

use Illuminate\Database\Seeder;

class DisponibilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prestacion = factory(App\Models\Disponibilidad::class, 10)->create();
    }
}
