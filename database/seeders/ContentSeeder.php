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
            'category_id' => 3,
            'sub_category_id' => 1,
            'title' =>'DAİRE',
            'language' =>'türkçe',
            'content' =>'<p>ASFASFASF</p><p>ASF<br>ASF<br>AS<br>FA<br>SF<br>AS<br>F<br>AS<br>FASLŞDMASLŞAS</p><p><br></p>',
            'content_url_slug' =>'test',
            'created_at' =>now(),
        ]);
    }

}
