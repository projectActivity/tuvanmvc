<?php

use Illuminate\Database\Seeder;
use App\Models\Catagory;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catagory::truncate();
        factory(Catagory::class, 30)->create();
    }
}
