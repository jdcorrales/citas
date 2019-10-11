<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Disponibilidad;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Disponibilidad::class, function (Faker $faker) {
	$fecha = $faker->dateTimeBetween($startDate = '-0 years', $endDate = '2020-12-31');
	$fecha = date_format($fecha, 'Y-m-d');
	$hora_inicial = Carbon::parse($fecha . " 08:00:00");
	$hora_final = Carbon::parse($fecha . " 08:00:00")->addHour(10);
    return [
        "dia" => $fecha,        
        "hora_inicial" => $hora_inicial->format('Y-m-d H:i:s'),
        "hora_final" => $hora_final->format('Y-m-d H:i:s'),        
        "intervalos" => function () use ($hora_inicial, $hora_final, $faker) {
        	$date = [];
        	$turnos = $faker->randomFloat(0, 3, 15);
        	$i = 0;

        	while($hora_inicial->lte($hora_final) && $i < $turnos) {
        		$hora_inicial = $hora_inicial->addMinutes(30);
        		$date[] = $hora_inicial->format('Y-m:d H:i:s');
        		$i++;
        	}

        	return json_encode($date);
        },
        "prestacion_id" => App\Models\Prestacion::all()->random()->id
    ];
});
