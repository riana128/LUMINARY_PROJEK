@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" class="form-control" id="image">
            <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" width="100">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label">Diskon (%)</label>
            <input type="number" step="0.01" name="discount" class="form-control" id="discount" value="{{ $product->discount }}">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->stock }}" required>
        </div>

        <div class="mb-3">
            <label for="category_products_id" class="form-label">Kategori Produk</label>
            <select name="category_products_id" class="form-control" id="category_products_id" required>
                @foreach ($categoryproducts as $categoryproduct)
                    <option value="{{ $categoryproduct->id }}" {{ $categoryproduct->id == $product->category_products_id ? 'selected' : '' }}>{{ $categoryproduct->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status_produk" class="form-label">Status Produk</label>
            <select name="status_produk" class="form-control" id="status_produk" required>
                <option value="draft" {{ $product->status_produk == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="public" {{ $product->status_produk == 'public' ? 'selected' : '' }}>Public</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
