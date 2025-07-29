<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            DB::table('jadwal')->insert([
                'tanggalPertandingan' => $faker->date(),
                'waktuPertandingan' => $faker->time(),
                'timRumah' => $faker->numberBetween(1, 5), // Assuming there are 20 teams
                'timTamu' => $faker->numberBetween(5, 10), // Assuming
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
