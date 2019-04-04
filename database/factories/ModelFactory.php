<?php

use App\User;
use App\Car;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->randomElement($brands = ['Fiat','Opel','Mercedes','Volvo','Peugeot']),
        'model'=> $faker->word,
        'year' => $faker->year($max = 'now'),
        'maxSpeed' => $faker->numberBetween(50, 435),
        'isAutomatic' => $faker->boolean,
        'engine' => $faker->randomElement($engine = ['diesel','petrol','hybrid']),
        'numberOfDoors' => $faker->randomElement($doors = [3,5])
    ];
});