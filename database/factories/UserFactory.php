<?php

use Carbon\Carbon;
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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    $first_name = $faker->firstName;
    $last_name = $faker->lastName;
    $username = strtolower(preg_replace('/\PL/u', '', $first_name.$last_name));

    return [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'username' => $username,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker $faker) {

    $name = $faker->word;

    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
        'name' => $name,
        'slug' => strtolower($name),
        'description' => $faker->paragraph,
        'current_task' => $faker->sentence,
        'task_deadline' => $faker->datetime(),
        'completed' => false
    ];
});
