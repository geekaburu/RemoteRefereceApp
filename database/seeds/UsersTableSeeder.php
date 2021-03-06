<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Create a specific test user
        App\User::create([
            'name' => 'Test User',
	        'email' => 'test@amprest.co.ke',
            'username' => 'test',
	        'password' => bcrypt('123456'),
	        'remember_token' => str_random(10),
        ]);

    	// Create other user records
        factory(App\User::class, 4)->create();
    }
}
