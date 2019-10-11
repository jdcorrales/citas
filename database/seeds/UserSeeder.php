<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\Models\User::class)->create([
            "name" => "Administrator",
            "email" => "administrator@prueba.com.co",
        ]);

        $user = factory(App\Models\User::class)->create([
            "name" => "Juan Corrales",
            "email" => "jcorrales@prueba.com.co",
        ]);

        $user = factory(App\Models\User::class)->create([
            "name" => "Ricargo",
            "email" => "ricardo@prueba.com.co",
        ]);

        $user = factory(App\Models\User::class)->create([
            "name" => "José Gregorio",
            "email" => "jgregorio@prueba.com.co",
        ]);
    }
}
