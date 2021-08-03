<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_modules')->insert([


            //module id 1 start
            [
                'id' => 1,
                'name' => 'All User',
                'key' => 'all_user',
                'position' => 1,
                'route' => 'user.all',
                'module_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Roles',
                'key' => 'roles',
                'position' => 2,
                'route' => 'role.all',
                'module_id' => 1,
            ],
            //module id 1 end
            
            // Category & Brand Start. Module Id 2 
            [
                'id' => 3,
                'name' => 'Brand',
                'key' => 'brand',
                'position' => 1,
                'route' => 'brand.index',
                'module_id' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Categories',
                'key' => 'categories',
                'position' => 2,
                'route' => 'category.index',
                'module_id' => 2,
            ],
            [
                'id' => 5,
                'name' => 'Sub-Categories',
                'key' => 'sub_categories',
                'position' => 3,
                'route' => 'sub-category.index',
                'module_id' => 2,
            ],
            // Category & Brand End. Module Id 2 

            // Product Strat. Module ID 3
            [
                'id' => 6,
                'name' => 'Attribute',
                'key' => 'attribute',
                'position' => 1,
                'route' => 'attribute.index',
                'module_id' => 3,
            ],
            [
                'id' => 7,
                'name' => 'Attribute Category',
                'key' => 'attribute_category',
                'position' => 2,
                'route' => 'attribute-category.index',
                'module_id' => 3,
            ],
            [
                'id' => 8,
                'name' => 'All Product',
                'key' => 'all_product',
                'position' => 2,
                'route' => 'product.index',
                'module_id' => 3,
            ],
            [
                'id' => 9,
                'name' => 'Add New Product',
                'key' => 'add_new_product',
                'position' => 3,
                'route' => 'product.create',
                'module_id' => 3,
            ],
            // Product End. Module ID 3


        ]);
    }
}
