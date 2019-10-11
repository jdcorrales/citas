<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prestacion;
use Faker\Generator as Faker;

$factory->define(Prestacion::class, function (Faker $faker) {
    return [
        "nombre" => $faker->randomElement(["Odontología", "Pediatría", "Medicina General", "Rayos X", "Vacunación"]),
        "sede_id" => App\Models\Sede::all()->random()->id
    ];
});
