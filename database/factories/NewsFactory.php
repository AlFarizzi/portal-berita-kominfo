<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\NewList;
use Faker\Generator as Faker;

$factory->define(NewList::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence(),
        "category_id" => rand(1,5),
        "slug" => $faker->slug(), 
        "body" => $faker->paragraph(),
        "thumbnail" => 'default.jpg',
    ];
});
