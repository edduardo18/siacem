<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\formato3;
use Faker\Generator as Faker;

$factory->define(formato3::class, function (Faker $faker) {
    return [
        'data1'=>$faker->text,
        'formato3_id' => rand(1,5)
    ];
});
