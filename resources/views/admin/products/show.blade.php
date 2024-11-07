@extends('layouts.app')

@section('content')
    <h1>Detail Produk</h1>

    <div>
        <strong>Nama Produk:</strong> {{ $product->name }}
    </div>

    <div>
        <strong>Gambar Produk:</strong>
        <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" width="200">
    </div>

    <div>
        <strong>Deskripsi:</strong> {{ $product->description }}
    </div>

    <div>
        <strong>Harga:</strong> Rp{{ number_format($product->price, 2) }}
    </div>

    <div>
        <strong>Diskon:</strong> {{ $product->discount }}%
    </div>

    <div>
        <strong>Harga Final:</strong> Rp{{ number_format($product->price - ($product->price * $product->discount / 100), 2) }}
    </div>

    <div>
        <strong>Stok:</strong> {{ $product->stock }}
    </div>

    <div>
        <strong>Kategori:</strong> {{ $product->categoryproducts->name }}
    </div>

    <div>
        <strong>Status Produk:</strong> {{ $product->status_produk }}
    </div>

    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endsection
