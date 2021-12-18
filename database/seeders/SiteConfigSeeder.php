<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_config')->insert([
            'mail_adress'=>'mehmetgurler@gmail.com',
            'site_phoneNumber'=>'05070455108',
            'adress' =>'DENEME',
            'maps_link' =>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d710.4381862360921!2d28.871029212008327!3d41.00923892025572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb3758515d2f%3A0x3f87d096bcdab39f!2zSGF6bmVkYXIsIEJpbGdlIFNrLiA5YSwgMzQxNjAgR8O8bmfDtnJlbi_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1639842521934!5m2!1str!2str',
            'created_at' =>now(),
        'updated_at' => now(),
        ]);
    }
}
