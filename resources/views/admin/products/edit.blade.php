<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            height: 120px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            margin-top: 20px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .btn-cancel {
            background-color: #dc3545;
        }

        .btn-cancel:hover {
            background-color: #c82333;
        }

        .image-preview {
            margin-top: 10px;
        }

        .image-preview img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Produk</h1>

    <!-- Form Edit Produk -->
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama Produk -->
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>

        <!-- Deskripsi Produk -->
        <label for="description">Deskripsi Produk</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>

        <!-- Harga Produk -->
        <label for="price">Harga Produk</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ $product->price }}" required>

        <!-- Stok Produk -->
        <label for="stock">Stok Produk</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>

        <!-- Kategori Produk (categoryproducts) -->
        <label for="category_products_id">Kategori Produk</label>
        <select name="category_products_id" id="category_products_id" required>
            @foreach ($categoryproducts as $categoryproduct)
                <option value="{{ $categoryproduct->id }}" {{ $categoryproduct->id == $product->category_products_id ? 'selected' : '' }}>
                    {{ $categoryproduct->name }}
                </option>
            @endforeach
        </select>

        <!-- Gambar Produk -->
        <label for="image">Gambar Produk</label>
        <input type="file" name="image" id="image">
        
        <!-- Preview gambar yang ada saat ini -->
        <div class="image-preview">
            <img src="{{ asset('storage/products/' . $product->image) }}" alt="Gambar Produk">
        </div>

        <!-- Tombol Simpan dan Batal -->
        <button type="submit" class="btn">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-cancel">Batal</a>
    </form>
</div>

</body>
</html>
