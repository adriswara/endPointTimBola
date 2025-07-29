<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            DB::table('report')->insert([
                'id_jadwal' => $faker->numberBetween(1, 10), // Assuming jadwal IDs are between 1 and 10
                'id_tim_home' => $faker->numberBetween(1, 10), // Assuming team IDs are between 1 and 10
                'id_tim_away' => $faker->numberBetween(1, 10), // Assuming team IDs are between 1 and 10
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
