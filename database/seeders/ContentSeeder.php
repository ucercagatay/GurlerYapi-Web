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
         'category_id' => 2,
         'sub_category_id' => 1,
         'title' =>'deneme',
         'language' =>'türkçe',
         'content' =>'deneme',
         'content_url_slug' =>'deneme',
         'created_at' =>now(),
         ]);
    }
}
