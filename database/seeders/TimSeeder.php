<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class TimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            DB::table('tim')->insert([
                'namaTim' => $faker->company, // random company name
                'logoTim' => hex2bin('89504E470D0A1A0A'), // hex string untuk binary/blob data                
                'tahunBerdiri' => $faker->year,
                'alamatMarkas' => $faker->address,
                'kotaMarkas' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
