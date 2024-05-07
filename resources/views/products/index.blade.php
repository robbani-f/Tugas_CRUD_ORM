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
        <ul>
            <li><a href="{{ url('/admin/create') }}">Halaman Pengguna Admin</a></li>
            <li><a href="{{ url('/admin') }}">Halaman Pengguna Merchant</a></li>
        </ul>
    </nav>
    <main>
        <!-- Tambahkan konten utama admin -->
        <div class="content">
            <!-- Tampilkan daftar produk di sini -->
            <div class="catalog">
                @foreach($products as $product)
                <div class="card">
                    <h3>{{ $product->nama }}</h3>
                    <p>{{ $product->harga }}</p>
                    <p>{{ $product->stok }}</p>
                    <p>{{ $product->kondisi }}</p>
                    <p>{{ $product->deskripsi }}</p>
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
