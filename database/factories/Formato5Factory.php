<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\formato5;
use Faker\Generator as Faker;

$factory->define(formato5::class, function (Faker $faker) {
    return [
        'data1'=>$faker->text,
        'formato5_id' => rand(1,5)
    ];
});
