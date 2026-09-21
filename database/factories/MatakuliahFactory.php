<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_mk' => fake()->unique()->bothify('MK###'),

            'nama_mk' => fake()->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Rekayasa Perangkat Lunak',
                'Struktur Data',
                'Pemrograman Berorientasi Objek',
                'Jaringan Komputer',
                'Sistem Informasi',
                'Analisis dan Perancangan Sistem',
                'Kecerdasan Buatan',
                'Sistem Operasi',
                'Pemrograman Mobile',
                'Internet of Things',
            ]),

            'sks' => fake()->randomElement([2, 3, 4]),
            'semester' => fake()->numberBetween(1, 8),
            'dosen_id' => User::inRandomOrder()->first()->id,
        ];
    }
}