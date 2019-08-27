<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'first_name' => strtolower($faker->firstName),
        'last_name' => strtolower($faker->lastName),
        'added_on' => now()
    ];
});
