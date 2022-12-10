<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'medical_consultation']);
        Category::create(['name'=>'family_consultation']);
        Category::create(['name'=>'psychological_consultation']);
        Category::create(['name'=>'professional_consultation']);
        Category::create(['name'=>'buisness_and_managment_consultation']);
    //
}
}
