<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <h1>Daftar Mata Kuliah</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
        </tr>

        @foreach ($data as $mk)
            <tr>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>{{ $mk->dosen->name ?? '-' }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>