@foreach($products as $product)
    <div>{{ $product->name }}</div>
    <div>{{ $product->price }}</div>
    <div>{{ $product->stock }}</div>
    <div>{{ $product->category->name }}</div>
    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
