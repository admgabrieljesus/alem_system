<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nationality;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $nationalities = [
            ['name' =>'Brasileira'],
            ['name' =>'Americana'],
            ['name' =>'Alema'],
       ];

        foreach ($nationalities as $nationality) {
           Nationality::factory(1)->create($nationality);
        }
    }
}
