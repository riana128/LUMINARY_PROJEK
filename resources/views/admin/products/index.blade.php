@extends('layouts.app')

@section('content')
    <h1>Daftar Produk</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Tambah Produk</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Diskon (%)</th>
                <th>Harga Final</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td><img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" width="100"></td>
                    <td>{{ $product->description }}</td>
                    <td>Rp{{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->discount }}%</td>
                    <td>Rp{{ number_format($product->price - ($product->price * $product->discount / 100), 2) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->categoryproducts->name }}</td>
                    <td>{{ $product->status_produk }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Detail</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
