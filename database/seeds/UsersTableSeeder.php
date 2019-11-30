<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Admin
        User::create([
        	'name' => 'Defry',
        	'email' => 'venturadef@admin.com',
        	'password' => bcrypt('123456'),
        	'role'=> 0
        ]);

        //Cliente
        User::create([
        	'name' => 'Helen',
        	'email' => 'helenbay@cliente.com',
        	'password' => bcrypt('123456'),
        	'role'=> 2
        ]);




    }
}