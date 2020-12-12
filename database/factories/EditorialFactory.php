<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Editorial;
use Faker\Generator as Faker;

$factory->define(Editorial::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'sede' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
