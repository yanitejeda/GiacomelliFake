<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Garden;

class GardensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) { 

            $newProject = new Garden();
            $newProject->title=$faker->sentence(8);
            $newProject->subtitle=$faker->sentence();
            $newProject->description=$faker->realText();
            $newProject->coverImg=$faker->imageUrl();
            $newProject->category=$faker->word();
            $newProject->save();
        }
    }
}
