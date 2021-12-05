<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('contents')->insert([
           'category_id'=>2,
           'title'=>'Satılık alanında Hizmetlerimiz',
           'language'=>'türkçe',
           'content'=>'DAKLSLASD',
           'content_url_slug'=>'deneme',
           'created_at'=>now(),
       ]);
    }
}
