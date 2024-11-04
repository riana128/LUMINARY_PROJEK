<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buyers</title>
</head>
<body>
    <h1>Daftar Buyers</h1>

    <!-- Pesan sukses jika data berhasil ditambahkan -->
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <!-- Tombol untuk menambah buyer -->
    <a href="{{ route('data_buyers.store') }}">Tambah Buyer</a>

    <!-- Tabel untuk menampilkan data buyers -->
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buyer->name }}</td>
                    <td>{{ $buyer->email }}</td>
                    <td>{{ $buyer->telepon }}</td>
                    <td>{{ $buyer->jenis_kelamin }}</td>
                    <td>{{ $buyer->tanggal_lahir }}</td>
                    <td>{{ $buyer->alamat }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Tidak ada data buyer.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
