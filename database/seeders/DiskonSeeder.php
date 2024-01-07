<?php

namespace Database\Seeders;

use App\Models\Diskon;
use Illuminate\Database\Seeder;

class DiskonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diskon::create([
            'id_diskon' => 1,
            'deskripsi' => 'Diskon Hari Raya',
            'status' => true,
            'jumlah' => 10,
        ]);
    }
}
