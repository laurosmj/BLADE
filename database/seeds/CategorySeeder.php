<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=> "Clothes",
                'description'=>'All items worn on the body',
            ],
            [
                'category'=> "Medicine",
                'description'=>'All drinkable items',
            ],
            [
                'category'=> "Food",
                'description'=>'All food items',
            ],
            [
                'category'=> "Accessories",
                'description'=>'All personal accessories items',
            ],
            [
                'category'=> "Shoes",
                'description'=>'All shoes items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
