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
    Category::create(['name'=>'medical_consultation', 'image' => (public_path('uploads/meme.jpg')) ]);
    Category::create(['name'=>'family_consultation' , 'image' => (public_path('uploads/leen.jpg'))  ]);
    Category::create(['name'=>'psychological_consultation' , 'image' => (public_path('uploads/woody.jpg')) ]);
    Category::create(['name'=>'professional_consultation'  , 'image' => (public_path('uploads/rooa.jpg'))  ]);
    Category::create(['name'=>'buisness_and_managment_consultation' ,  'image' => (public_path('uploads/lolo.jpg'))  ]);
    //
}
}
