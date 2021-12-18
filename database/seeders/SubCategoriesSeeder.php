<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            'name'=>'Daire',
            'category_id'=>3,
            'sub_category_url' =>'daire',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);



    }
}
