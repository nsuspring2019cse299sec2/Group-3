<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'category_id' => $faker->randomElement(\App\Category::pluck('id')->toArray()),
        'status' => $faker->randomElement([1,0]),
        'company_id' => $faker->randomElement(\App\User::where('role','company')->pluck('id')->toArray()),
        'applicant_id' => $faker->randomElement([1,0]),
    ];
});
