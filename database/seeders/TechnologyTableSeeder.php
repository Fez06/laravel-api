<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologies = ['Artificial Intelligence (AI) And Automation', 'Advanced Resource and Project Management Software', 'Rise in Remote Working',
        'Demand for Emotionally Intelligent Leaders', 'Increasing Focus on Data Analytics for Data-Driven Project Management'];

        Technology::truncate();

        foreach ($technologies as $technology) {

            $newtechnology= new Technology();
        
            $newtechnology->name= $technology;
            $newtechnology->advantages= $faker->text(100);
            
            $newtechnology->save();

        }
    }
}
