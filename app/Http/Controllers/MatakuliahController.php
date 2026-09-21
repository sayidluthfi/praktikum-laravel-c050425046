<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\User;

class MatakuliahController extends Controller
{
    // Method untuk menampilkan daftar mata kuliah
    public function index()
    {
        // Mengambil data matakuliah sekaligus data dosennya (Eager Loading)
        $matakuliahs = Matakuliah::with('dosen')->get(); 
        return view('matakuliahs.index', compact('matakuliahs'));
    }

    // 1. Method untuk menampilkan halaman form HTML
    public function create()
    {
        // Ambil data dosen (dari tabel users) untuk dropdown di form
        $dosens = User::all(); 
        
        // Tampilkan view form create
        return view('matakuliahs.create', compact('dosens'));
    }

    // 2. Method untuk menyimpan data ke database menggunakan Eloquent create()
    public function store(Request $request)
    {
        // Validasi inputan dari form agar data aman
        $validatedData = $request->validate([
            'kode_mk'  => 'required|string|max:15|unique:matakuliahs',
            'nama_mk'  => 'required|string|max:255',
            'sks'      => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|min:1|max:8',
            'dosen_id' => 'required|exists:users,id',
        ]);

        // INI DIPERIKSA: Menggunakan method create() Eloquent untuk menyimpan data
        Matakuliah::create($validatedData);

        // Alihkan kembali ke halaman daftar mata kuliah dengan pesan sukses
        return redirect('/matakuliah')->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }
}