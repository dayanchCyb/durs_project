<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $objs = [

            [
                'category_id' => 1,
                'brand_id' => 1,
                'name' => 'High-quality “Durs” acrylic paint for exterior works.',
                'description' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.  
                            Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                                Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.',
                'image' => 'Luks-imulsiya-wedra_01.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 1,
                'name' => 'quality “Durs” acrylic paint for exterior works.',
                'description' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according to preparation of surface and applying method.  
                            Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                                Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. Complete drying time is 24 hours.',
                'image' => 'Luks-imulsiya-wedra_01.png',
            ],
        ];
        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'brand_id' => $obj['brand_id'],
                'name' => $obj['name'],
                'description' => $obj['description'],
                'image' => $obj['image']
            ]);
            }
        }
//
}
