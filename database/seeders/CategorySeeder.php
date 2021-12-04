<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name'=>'Hakkımızda',
            'language'=>'Turkce',
            'url_slug'=>'hakkımızda',
            'created_at'=>now(),
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Satılık',
            'language'=>'türkçe',
            'url_slug'=>'satilik',
            'sub_category' =>'Daire',
            'sub_category_2'=>'Arsa',
            'sub_category_3'=>'Villa',
            'created_at'=>now(),
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Kiralık',
            'language'=>'türkçe',
            'url_slug'=>'kiralik',
            'sub_category' =>'Daire',
            'sub_category_2'=>'Arsa',
            'created_at'=>now(),
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Referanslar',
            'language'=>'türkçe',
            'url_slug'=>'referanslar',
            'created_at'=>now(),
        ]);
    }
}
