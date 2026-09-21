<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Matakuliah extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi melalui mass assignment (termasuk foreign key)
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
        'dosen_id',
        'mahasiswa_id',
    ];

    // Relasi Many-to-One: Matakuliah ini dimiliki oleh satu Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    // Relasi Many-to-One: Matakuliah ini diajar oleh satu Dosen (User)
    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}