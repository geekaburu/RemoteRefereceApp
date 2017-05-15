<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a specific test user
        App\Profile::create([
            'user_id'=>1,
            'name' => "John Doe",
            'email' => "doe@joe.com",
            'national_id'=>"987654321" ,
            'mobile_number'=> "0712345678",
            'city' => "Nairobi",
            'country' => "Kenya",
        ]);

        // Create profile records
        factory(App\Profile::class, 49)->create();
    }
}
