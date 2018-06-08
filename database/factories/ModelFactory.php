<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => 'admin',
        'password' => app('hash')->make('admin'),
    ];
});


$factory->define(\App\Entity\Customer::class, function (Faker\Generator $faker) {
    $num  = [1,2];
    return [
        'customer_name' => $faker->name,
        'sex'           => $num[ array_rand($num) ],
        'tel'           => $faker->unique()->phoneNumber,
        'address'       => $num[ array_rand($num) ],
        'group'         => $num[ array_rand($num) ],
    ];
});