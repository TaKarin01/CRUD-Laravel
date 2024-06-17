<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('types')->insert([
            ['Id'=>1,'name'=>'Sinh vien','description'=>$faker->sentence],
            ['Id'=>2,'name'=>'Thac Si','description'=>$faker->sentence],
            ['Id'=>3,'name'=>'Nghien cuu sinh','description'=>$faker->sentence]
        ]);
    }
}
