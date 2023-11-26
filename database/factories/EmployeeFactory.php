<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'username' =>  $faker->name,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'age' => $faker->numberBetween(18,60)
    ];
});
