<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'body' => $this ->faker->sentence(20) 
    ];
});
