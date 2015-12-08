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

$factory->define(App\Models\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
        'ip_register' => $faker->ipv4,
    ];
});

$factory->define(App\Models\Petition::class, function ($faker) {
    $heading = $faker->sentence;
    $slug = str_slug($heading,"-");
    return [
        'user_id' => factory('App\Models\User')->create()->id,
        'petition_to' => $faker->name,
        'heading' => $heading,
        'content' => $faker->paragraph(90),
        'excerpt' => $faker->paragraph(3),
        'image' => $faker->imageUrl(960,540),
        'image_thumb' => $faker->imageUrl(320,180),
        'slug' => $slug,
        'published' => 1,
    ];
});


$factory->define(App\Models\Comment::class, function ($faker) {
    return [
        'petition_id' => factory('App\Models\Petition')->create()->id,
        'user_id' => factory('App\Models\User')->create()->id,
        'comment' => $faker->paragraph,
        'ip_addr' => $faker->ipv4,
        'approved' => 1,
    ];
});
