<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'id_staff' => 152022000,
            'nama' => 'admin',
            'jenkel' => 'male',
            'tanggal_lahir' => '2004-10-10',
            'jabatan' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'foto' => 'ASASASA',
        ]);
    }
}
