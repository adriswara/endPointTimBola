<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 150) as $i) {
            DB::table('pemain')->insert([
                'namaPemain' => $faker->name,
                'tinggiBadan' => $faker->numberBetween(150, 200), // in cm
                'beratBadan' => $faker->numberBetween(50, 100),
                'posisiPemain' => $faker->randomElement(['Penyerang', 'Gelandang', 'Bertahan', 'Penjaga Gawang']),
                'nomorPunggung' => $faker->numberBetween(1, 99),
                'idTim' => $faker->numberBetween(1, 10), // adjust as needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
