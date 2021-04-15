<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 20 ; $i++) {
            DB::table('siswa')->insert([
                'nipd' => "192010020$i",
                'nama_siswa' => $faker->name,
                'jenis_kelamin' => $faker->randomElement($array = array('P', 'L')),
                'kelas' => $faker->randomElement($array = array('X', 'XI', 'XII')),
                'alamat' => $faker->address
            ]);
        }
    }
}
