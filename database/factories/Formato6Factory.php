<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\formato6;
use Faker\Generator as Faker;

$factory->define(formato6::class, function (Faker $faker) {
    return [
        'data1'=>$faker->text,
        'formato6_id' => rand(1,5)
    ];
});
