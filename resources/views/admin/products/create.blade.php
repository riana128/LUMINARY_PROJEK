@extends('layouts.app')

@section('content')
    <h1>Tambah Produk</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" required>
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label">Diskon (%)</label>
            <input type="number" step="0.01" name="discount" class="form-control" id="discount" value="0">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stok</label>
            <input type="number" name="stock" class="form-control" id="stock" required>
        </div>

        <div class="mb-3">
            <label for="category_products_id" class="form-label">Kategori Produk</label>
            <select name="category_products_id" class="form-control" id="category_products_id" required>
                @foreach ($categoryproducts as $categoryproduct)
                    <option value="{{ $categoryproduct->id }}">{{ $categoryproduct->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="status_produk" class="form-label">Status Produk</label>
            <select name="status_produk" class="form-control" id="status_produk" required>
                <option value="draft">Draft</option>
                <option value="public">Public</option>
            </select>
        </div>

        <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
        <button type="reset" class="btn btn-md btn-warning">RESET</button>
    </form>
@endsection
