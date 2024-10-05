<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Product Name" value="{{ old('name', $product->name) }}">
    <textarea name="description" placeholder="Product Description">{{ old('description', $product->description) }}</textarea>
    <input type="number" name="price" placeholder="Product Price" value="{{ old('price', $product->price) }}">
    <input type="number" name="stock" placeholder="Product Stock" value="{{ old('stock', $product->stock) }}">
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit">Update</button>
</form>
