<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_names=['Admin','Üye'];
        foreach($role_names as $role_name){
            DB::table('roles')->insert([

                'role_name'=>$role_name,
            ]);
        }
        DB::table('users')->insert([
            'role_id'=>1,
            'name'=>'Mehmet',
            'surname'=>'Gürler',
            'email'=>'mehmetgurler@gmail.com',
            'password'=>Hash::make('123456'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

    }
}
