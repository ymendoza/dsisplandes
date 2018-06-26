<?php

use Illuminate\Database\Seeder;

class usuarios extends Seeder
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
        
        ]); 
    }
     DB::table('users')->insert([
        'name' => 'Jeniffer Santiago',
        'email' => 'jeniffersantiago',
        ]); 
    }

     DB::table('users')->insert([
        'name' => 'Ana Bravo',
        'email' => 'anabravo',
        
        ]); 
    }

}
