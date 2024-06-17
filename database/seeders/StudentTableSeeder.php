<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 8; $i++)
        {
            DB::table('students')->insert([
                'type_id'=>$faker->numberBetween(1,3),
                'name'=>$faker->name,
                'birthday'=>$faker->date,
                'gender'=>$faker->randomElement(['Nam','Nu']),
                'address'=>$faker->address,
                'phone_number'=>$faker->phoneNumber,
                'email'=>$faker->email
            ]);
        }
    }
}
