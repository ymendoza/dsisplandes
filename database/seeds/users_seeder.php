<?php

use Illuminate\Database\Seeder;
use App\User; 

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   

    public function run()
    {
 
     DB::table('users')->insert([
        'name' => 'Yoelis Mendoza',
        'email' => 'yoelismendoza',
        'password' => bcrypt('yoelismendoza'), 
         
        'created_at' => date('Y-m-d'),
        ]); 
      DB::table('users')->insert([
        'name' => 'Jeniffer Santiago',
        'email' => 'jeniffersantiago',
        'password' => bcrypt('jeniffersantiago'),
       
        'created_at' => date('Y-m-d'),
        ]); 
    

     DB::table('users')->insert([
        'name' => 'Ana Bravo',
        'email' => 'anabravo',
        'password' => bcrypt('anabravo'),
        'created_at' => date('Y-m-d'),
        ]); 
    }

}
