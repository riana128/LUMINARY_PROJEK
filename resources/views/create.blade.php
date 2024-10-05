@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Produk</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga Produk</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="stock">Stok Produk</label>
            <input type="number" name="stock" id="stock" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_id">Kategori Produk</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
