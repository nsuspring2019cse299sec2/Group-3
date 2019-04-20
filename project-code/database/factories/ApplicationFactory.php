<?php

use Faker\Generator as Faker;

$factory->define(App\Application::class, function (Faker $faker) {
    return [
        'job_id' => $faker->randomElement(\App\Job::pluck('id')->toArray()),
        'applicant_id' => $faker->randomElement(\App\User::where('role','jobseeker')->pluck('id')->toArray()),
        'description' => $faker->paragraph,
        'achievements' => '',
        'prev_exp' => '',
        'resume_file_path' => '',
    ];
});
