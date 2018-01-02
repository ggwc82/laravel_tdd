<?php

use Carbon\Carbon;

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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Concert::class, function (Faker\Generator $faker) {
    return [
        'title' => 'The Example Title',
        'subtitle' => 'The Example Subtitle',
        'date' => Carbon::parse('+2 weeks'),
        'price' => 2000,
        'venue' => 'The Example Theatre',
        'address' => '123 Example Lane',
        'city' => 'Fakeville',
        'postcode' => 'ON 17916',
        'additional_info' => 'Further example info.'
    ];
});
