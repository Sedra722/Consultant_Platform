<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Expert; 


class ExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1 ; $i <= 40 ; $i++){
            Expert::create([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'phone'     => $faker->phoneNumber,
                'password'  => '$2y$10$92IXUNpkjO0rOQ5byMiYe4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'category_id'=> random_int(1,5),
                'profile_image' => (public_path('uploads/sedra.jpg')),
                 'phone'=> $faker->phoneNumber,
                'address'=> $faker->address,
                'workspace_name'=> "SLRcompany.inc",
                'years_of_experience'=> "5",
                'specialization'=> 'doctor',
                'description'=> $faker->text(),
                'rating'=> random_int(1,5),
                'email_verified_at'=> now(),


            ]);
        }
    }
}
