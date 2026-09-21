<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proyek Akhir - Data Akademik</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Manajemen Data Akademik (Proyek Akhir)</h1>

    @foreach ($mahasiswas as $mhs)
        <div class="card">
            <h3>{{ $mhs->nama }} (NIM: {{ $mhs->nim }})</h3>
            <p><b>Prodi:</b> {{ $mhs->prodi }} | <b>Semester:</b> {{ $mhs->semester }}</p>

            <table>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Dosen Pengampu</th>
                </tr>
                @foreach ($mhs->matakuliahs as $mk)
                <tr>
                    <td>{{ $mk->kode_mk }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td>{{ $mk->dosen->name ?? 'Belum ada' }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    @endforeach
</body>
</html>