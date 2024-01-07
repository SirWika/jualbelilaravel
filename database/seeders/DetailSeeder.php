<?php

namespace Database\Seeders;

use App\Models\Detail_transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail_transaksi::create([
            'id_order' => 1,
            'totalsetelah' => 30000,
            'id_staff' => 152022000,
        ]);
    }
}
