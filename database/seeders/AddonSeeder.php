<?php

namespace Database\Seeders;

use App\Models\Addon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Addon::create([
            'name_addOn' => 'Baby Crab',
            'price_addOn' => 10000,
            'stock_addOn' => 50,
            'categories_id' => '1'
        ]);

        Addon::create([
            'name_addOn' => 'Noki',
            'price_addOn' => 10000,
            'stock_addOn' => 50,
            'categories_id' => '1'
        ]);

        Addon::create([
            'name_addOn' => 'Gyoza',
            'price_addOn' => 10000,
            'stock_addOn' => 50,
            'categories_id' => '1'
        ]);

        Addon::create([
            'name_addOn' => 'Ebifurai',
            'price_addOn' => 10000,
            'stock_addOn' => 50,
            'categories_id' => '1'
        ]);

        Addon::create([
            'name_addOn' => 'Fruit',
            'price_addOn' => 5000,
            'stock_addOn' => 80,
            'categories_id' => '2'
        ]);

        Addon::create([
            'name_addOn' => 'Chocolate',
            'price_addOn' => 5000,
            'stock_addOn' => 80,
            'categories_id' => '2'
        ]);

        Addon::create([
            'name_addOn' => 'Ice Cream',
            'price_addOn' => 5000,
            'stock_addOn' => 80,
            'categories_id' => '2'
        ]);

        Addon::create([
            'name_addOn' => 'Biscuit',
            'price_addOn' => 5000,
            'stock_addOn' => 80,
            'categories_id' => '2'
        ]);

        Addon::create([
            'name_addOn' => 'Jelly',
            'price_addOn' => 5000,
            'stock_addOn' => 80,
            'categories_id' => '3'
        ]);

        Addon::create([
            'name_addOn' => 'pearl',
            'price_addOn' => 5000,
            'stock_addOn' => 80,
            'categories_id' => '3'
        ]);

    }
}
