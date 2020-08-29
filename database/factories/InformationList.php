<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\InformationList;
use Faker\Generator as Faker;

$factory->define(InformationList::class, function (Faker $faker) {
    return [
        "information_id" => rand(2,3),
        "sub_information_id" => null,
        "body" => $faker->paragraph(20),
        "title" => $faker->word(),
        "slug" => \Str::slug($faker->sentence()).'-'.\Str::random(5),
        "thumbnail" => 'default.jpg',
        "file" => null
    ];
});
