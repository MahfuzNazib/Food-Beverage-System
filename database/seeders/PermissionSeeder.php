<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 1,
                'key' => 'user_management',
                'display_name' => 'User Management',
                'module_id' => 1,
            ],
            [
                'id' => 2,
                'key' => 'all_user',
                'display_name' => 'All User',
                'module_id' => 1,
            ],
            [
                'id' => 3,
                'key' => 'roles',
                'display_name' => 'Roles',
                'module_id' => 1,
            ],

            // Category Brand Permission Start
            [
                'id' => 4,
                'key' => 'category_brand',
                'display_name' => 'Category & Brand',
                'module_id' => 2,
            ],
            [
                'id' => 5,
                'key' => 'brand',
                'display_name' => 'Brand',
                'module_id' => 2,
            ],
            [
                'id' => 6,
                'key' => 'categories',
                'display_name' => 'Categories',
                'module_id' => 2,
            ],
            [
                'id' => 7,
                'key' => 'sub_categories',
                'display_name' => 'Sub Categories',
                'module_id' => 2,
            ],

            // Category Brand Permission End
        ]);
    }
}
