<?php

use Faker\Generator as Faker;
use App\Models\Base\Aula;
use App\Models\Base\Entity;

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

$factory->define(Aula::class, function (Faker $faker) {
    return array_merge([
        'nombre' => $faker->name,
        'nomenclatura' => $faker->randomLetter . $faker->numberBetween(0, 20),
        'piso' => $faker->numberBetween(0, 1),
        'capacidad' => $faker->numberBetween(20, 40)
    ], Entity::FACTORY_FIELDS($faker));
});
