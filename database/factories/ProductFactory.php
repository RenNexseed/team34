<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(4),
      'category' => $faker->numberBetween($min=0, $max=2),
      'price' => $faker->numberBetween($min=600, $max=4000),
      'picture_path' => $faker->numberBetween($min=10, $max=4000)

        //
    ];
});
