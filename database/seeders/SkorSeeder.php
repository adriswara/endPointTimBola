<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SkorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            DB::table('skor')->insert([
                'totalSkor' => $faker->numberBetween(0, 5),
                'pemainYangMencetakGol' => $faker->name,
                'waktuTerjadinyaGol' => $faker->time(),
                'idJadwal' => $faker->numberBetween(1, 10), // adjust as needed
                'idTim' => $faker->numberBetween(1, 10),    // adjust as needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
