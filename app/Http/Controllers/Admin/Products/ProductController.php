<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Product; // Menggunakan model Product
use App\Models\CategoryProduct; // Import model CategoryProduct
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with('categoryproducts')->paginate(10); // Eager load relasi categoryproduct
        
        return view('admin.products.index', compact('products'));
    }

    public function create(): View
    {
        // Get all product categories for the creation form
        $categoryproducts = CategoryProduct::all();
        return view('admin.products.create', compact('categoryproducts'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate form input
        $request->validate([
            'name'                 => 'required|min:2',
            'description'          => 'required|min:10',
            'price'                => 'required|numeric',
            'stock'                => 'required|integer',
            'category_products_id' => 'required|exists:category_products,id', // Make sure category exists
            'image'                => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/products/', $image->hashName());

        // Create product
        Product::create([
            'name'                 => $request->name,
            'description'          => $request->description,
            'price'                => $request->price,
            'stock'                => $request->stock,
            'category_products_id' => $request->category_products_id,
            'image'                => $image->hashName(),
    ]);
        

        // Redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        // Get product by ID
        $product = Product::findOrFail($id);

        // Render view with product
        return view('admin.products.show', compact('product'));
    }

    public function edit(string $id): View
    {
        // Get product and categories for editing form
        $product = Product::findOrFail($id);
        $categoryproducts = CategoryProduct::all();

        // Render view with product and categories
        return view('admin.products.edit', compact('product', 'categoryproducts'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        // Validate form input
        $request->validate([
            'name'                 => 'required|min:2',
            'description'          => 'required|min:10',
            'price'                => 'required|numeric',
            'stock'                => 'required|integer',
            'category_products_id' => 'required|exists:category_products,id', // Make sure category exists
            'image'                => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Image is nullable during update
        ]);

        $product = Product::findOrFail($id);

        // If a new image is uploaded, handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::delete('public/products/' . $product->image);

            // Upload new image
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/products/', $image->hashName());

            // Update product with new image
            $product->update([
                'name'                 => $request->name,
                'description'          => $request->description,
                'price'                => $request->price,
                'stock'                => $request->stock,
                'category_products_id' => $request->category_products_id,
                'image'                => $image->hashName(),
            ]);
        } else {
            // Update product without changing the image
            $product->update([
                'name'                 => $request->name,
                'description'          => $request->description,
                'price'                => $request->price,
                'stock'                => $request->stock,
                'category_products_id' => $request->category_products_id,
            ]);
        }

        // Redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        // Delete the image
        Storage::delete('public/products/' . $product->image);

        // Delete product
        $product->delete();

        // Redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
