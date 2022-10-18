<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['letter' => 'ES' , 'name' =>'Estagiário'],
            ['letter' => 'FA' , 'name' =>'Familiar'],
            ['letter' => 'MC' , 'name' =>'Membro Colaborador'],
            ['letter' => 'ME' , 'name' =>'Membro Efetivo'],
            ['letter' => 'MF' , 'name' =>'Membro Fundador'],
            ['letter' => 'MH' , 'name' =>'Membro Honorário'],
            ['letter' => 'MP' , 'name' =>'Membro Parceiro'],
            ['letter' => 'VR' , 'name' =>'Voluntário Remoto'],
            ['letter' => 'VP' , 'name' =>'Voluntário Presencial'],
        ];

        foreach ($categories as $category) {
           Category::factory(1)->create($category);
        }
    }
}