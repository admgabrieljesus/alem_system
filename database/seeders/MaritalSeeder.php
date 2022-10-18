<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marital;


class MaritalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritals = [
            ['name' =>'Casado(a)'],
            ['name' =>'Divorciado(a)'],
            ['name' =>'Solteiro(a)'],
            ['name' =>'Viúvo(a)'],
        ];

        foreach ($maritals as $marital) {
           Marital::factory(1)->create($marital);
        }
    }
}
