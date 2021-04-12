<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 20 ; $i++) {
            DB::table('siswa')->insert([
                'nipd' => Str::random(12),
                'nama_siswa' => "Dana $i",
                'jenis_kelamin' => 'L',
                'kelas' => 'X',
                'alamat' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore aspernatur non sunt!'
            ]);
        }
    }
}
