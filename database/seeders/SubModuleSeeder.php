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
                'route' => 'user.all',
                'module_id' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Categories',
                'key' => 'categories',
                'position' => 2,
                'route' => 'user.all',
                'module_id' => 2,
            ],
            [
                'id' => 5,
                'name' => 'Sub-Categories',
                'key' => 'sub_categories',
                'position' => 3,
                'route' => 'user.all',
                'module_id' => 2,
            ],
            // Category & Brand End. Module Id 2 

        ]);
    }
}
