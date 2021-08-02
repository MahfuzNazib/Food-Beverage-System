<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                'id' => 1,
                'name' => 'User Management',
                'key' => 'user_management',
                'icon' => 'ni ni-circle-08',
                'position' => 1,
                'route' => null,
            ],

            [
                'id' => 2,
                'name' => 'Category & Brand',
                'key' => 'category_brand',
                'icon' => 'ni ni-world',
                'position' => 2,
                'route' => null,
            ],

            [
                'id' => 3,
                'name' => 'Product Management',
                'key' => 'product_management',
                'icon' => 'ni ni-bag-17',
                'position' => 3,
                'route' => null,
            ],

            [
                'id' => 4,
                'name' => 'Offer Management',
                'key' => 'offer_management',
                'icon' => 'ni ni-money-coins',
                'position' => 4,
                'route' => null,
            ],

            [
                'id' => 5,
                'name' => 'Order Management',
                'key' => 'Order_management',
                'icon' => 'ni ni-single-copy-04',
                'position' => 5,
                'route' => null,
            ],
        ]);
    }
}
