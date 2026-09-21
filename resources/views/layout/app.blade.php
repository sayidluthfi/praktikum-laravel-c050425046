<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Praktikum Laravel' }}</title>
    <!-- Hubungkan CSS (Bootstrap/Tailwind) jika ada -->
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Akademik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>

                    {{-- CONTOH @foreach UNTUK MENU NAVIGASI DINAMIS --}}
                    @if(isset($menus))
                        @foreach($menus as $menu)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $menu['url'] }}">{{ $menu['nama'] }}</a>
                            </li>
                        @endforeach
                    @else
                        {{-- Menu fallback jika data $menus belum dikirim dari controller --}}
                        <li class="nav-item"><a class="nav-link" href="/mahasiswa">Mahasiswa</a></li>
                        <li class="nav-item"><a class="nav-link" href="/dosen">Dosen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/matakuliah">Matakuliah</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Hubungkan JS Bootstrap -->
    <script src="https://jsdelivr.net"></script>
</body>
</html>
