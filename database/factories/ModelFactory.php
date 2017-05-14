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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// Create a new user
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'username' => $faker->unique()->firstName($gender = null|'male'|'female'),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// Create a new profile
$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'user_id'=>$faker->numberBetween($min = 1, $max = 5),
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'national_id' =>$faker->unique()->randomNumber,
        'mobile_number'=>substr($faker->unique()->e164PhoneNumber, -12),
        'city' => $faker->city,
        'country' => $faker->country,
    ];
});

// Create a debt entry
$factory->define(App\Debt::class, function (Faker\Generator $faker) {
    return [
        'user_id'=>$faker->numberBetween($min = 1, $max = 5),
        'profile_id' => $faker->numberBetween($min = 1, $max = 50),
        'transaction_id' => $faker->numberBetween($min = 1, $max = 50),
        'transaction_amount' => $faker->numberBetween($min = 1000, $max = 50000),
        'transaction_date' => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
        'transaction_days' => $faker->numberBetween($min = 1, $max = 50),
    ];
});
