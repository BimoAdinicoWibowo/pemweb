<?php

namespace Database\Seeders;

use App\Models\Murid;
use Illuminate\Database\Seeder;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Murid::create([
            'nama' => 'ramdani',
            'kelas' => 'multimedia',
            'nisn' => '20200421',
            'tanggal_lahir' => '09_oktober_2005',
            'alamat' => 'citra raya',
        ]);
    }
}