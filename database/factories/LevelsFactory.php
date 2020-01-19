<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Levels;
use Faker\Generator as Faker;

$factory->define(Levels::class, function (Faker $faker) {

    return [
        'level' => $faker->word,
        'course_id' => $faker->randomDigitNotNull,
        'level_description' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
