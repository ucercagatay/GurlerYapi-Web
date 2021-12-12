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
            'title' =>'DENEMELER',
            'language' =>'türkçe',
            'content' =>'deneASOPFJASOPJFPOASJASFme',
            'content_url_slug' =>'dASFKLŞNASKLNFLKAeneme',
            'created_at' =>now(),
        ]);
    }

}
