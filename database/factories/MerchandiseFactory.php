<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'brand_name'=>$this->faker->word,
        'product_name'=>$this->faker->word,
        'category_id'=> rand(1, 5),
        'retail_price'=> rand(2, 250),
        'wholesale_price'=> rand(22, 850),
        'unit_id'=> rand(1, 4),
        'wholesale_qty'=> rand(6, 50),
        'qty_stock'=> rand(10, 500),
    ];
});
