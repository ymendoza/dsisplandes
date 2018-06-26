<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
	    User::create([
	        'name' => 'Administrador',
	        'email' => 'yoe318@gmail.com',
	        
	    ]);

	    User::create([
	        'name' => 'Anthoni',
	        'email' => 'yosec.cervino@gmail.com',
	        
	    ]);

	    User::create([
	        'name' => 'Ana',
	        'email' => 'anitac.bravo@gmail.com',
	        
	    ]);

}

}
