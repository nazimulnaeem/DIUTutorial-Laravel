<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         DB::table('users')->insert([
            'role_id'=>'1',
           'name' => 'Md. Nazimul Islam Naeem',
            'username'=>'nazimul',
            'email'=>'nazimulnaeem@gmail.com',
            'password'=> bcrypt('0123456789'),
        ]);
        
         DB::table('users')->insert([
            'role_id'=>'2',
           'name' => 'Md. Rakibul Hasan Pathan',
            'username'=>'rakib',
            'email'=>'islam15-5978@gmail.com',
            'password'=> bcrypt('123456'),
        ]);
         
          DB::table('users')->insert([
            'role_id'=>'3',
           'name' => 'Aninda Debnath',
            'username'=>'aninda',
            'email'=>'nazimul11623@gmail.com',
            'password'=> bcrypt('123456'),
        ]);
    }
}
