<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\formato4;
use Faker\Generator as Faker;

$factory->define(formato4::class, function (Faker $faker) {
    return [
        'data1'=>$faker->text,
        'formato4_id' => rand(1,5)
    ];
});
