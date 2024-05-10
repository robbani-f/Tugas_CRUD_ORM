<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tambahkan link CSS jika diperlukan -->
    <link rel="stylesheet" href="{{ asset('csscopy/products.css') }}">
</head>
<body>
    <nav>
        <!-- Tambahkan navigasi atau menu admin -->
        <ul class="navbar-items">
    <li class="border-item"><a href="{{ route('admin.index') }}">Halaman Pengguna 1</a></li>
    <li><h3>PRODUCT</h3></li>
    <li class="border-item"><a href="{{ route('merchant.index') }}">Halaman Pengguna 2</a></li>
</ul>

    </nav>
    <main>
        <!-- Tambahkan konten utama admin -->
        <div class="content">
            <!-- Tampilkan daftar produk di sini -->
            <div class="catalog">
                @foreach($products as $product)
                <div class="card">
                    <p>Gambar: <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama }}"></p>
                    <h3>{{ $product->nama }}</h3>
                    <p>Harga: {{ $product->harga }}</p>
                    <p>Stok: {{ $product->stok }}</p>
                    <p>Kondisi: {{ $product->kondisi }}</p>
                    <p>Deskripsi: {{ $product->deskripsi }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </main>
    <footer>
        <!-- Tambahkan konten footer sesuai kebutuhan -->
    </footer>
</body>
</html>
