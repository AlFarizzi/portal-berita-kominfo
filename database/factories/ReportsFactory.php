<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ReportList;
use Faker\Generator as Faker;

$factory->define(ReportList::class, function (Faker $faker) {
    return [
        "slug" => $faker->slug(),
        "report_id" => rand(1,5),
        "body" => $faker->paragraph(),
        "title" => $faker->sentence(),
        "thumbnail" => 'default.jpg'
    ];
});
