<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {

    return [
        'ISBN' => $faker->randomDigitNotNull,
        'editoriales_id' => $faker->randomDigitNotNull,
        'titulo' => $faker->word,
        'sinopsis' => $faker->text,
        'n_paginas' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
