<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Component::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'user_id' => factory('App\User')->create()->id,
        'body' => $faker->paragraph,
        'description' => $faker->paragraph,
    ];
});
