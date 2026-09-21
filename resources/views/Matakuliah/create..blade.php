<h1>Tambah Mata Kuliah</h1>

    <form action="/matakuliah" method="POST">
        @csrf

        <label>Kode Mata Kuliah</label><br>
        <input type="text" name="kode_mk" value="MK001"><br><br>

        <label>Nama Mata Kuliah</label><br>
        <input type="text" name="nama_mk" value="Pemrograman Berbasis Web"><br><br>

        <label>SKS</label><br>
        <input type="number" name="sks" value="3"><br><br>

        <label>Semester</label><br>
        <input type="number" name="semester" value="3"><br><br>

        <label>Dosen Pengampu</label><br>
        <input type="text" value="Arifin Noor Asyikin, S.ST., M.T." readonly><br><br>

        <button type="submit">Simpan</button>
    </form>