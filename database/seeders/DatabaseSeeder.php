<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Mahasiswa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 20 data dosen/user
        User::factory(20)->create();

        // Membuat 20 data mahasiswa
        Mahasiswa::factory(20)->create();

        // Membuat 20 data mata kuliah
        $this->call([
            MatakuliahSeeder::class,
        ]);
    }
}