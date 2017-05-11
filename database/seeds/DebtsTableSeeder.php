<?php

use Illuminate\Database\Seeder;

class DebtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Debt::class, 50)->create();
    }
}
