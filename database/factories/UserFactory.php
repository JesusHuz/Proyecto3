<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nombre' => $faker->name,
        'apellido' => $faker->name,
        'cedula' => $faker->unique()->numberBetween(10000,99999),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Servicio::class, function (Faker $faker) {
    return [
        'telefono' => $faker->randomElement(['200','400','600']),
        'internet' => $faker->randomElement(['256','512','1024']),
        'cable' => $faker->randomElement(['ladrillo','paja','madera']),
        'ctelefono' => $faker->randomElement([2,4,6]),
        'cinternet' => $faker->randomElement([10,20,30]),
        'ccable' => $faker->randomElement([15,25,35]),
        'total' => $faker->randomElement([50,12,27]),
       
    ];
});
