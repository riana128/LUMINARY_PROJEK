<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    // Menampilkan daftar kategori produk
    public function index()
    {
        $categoryproducts = CategoryProduct::all(); // Menggunakan camelCase untuk konsistensi
        return view('admin.categoryproduct.index', compact('categoryproducts'));
    }

    // Menampilkan form untuk membuat kategori produk baru
    public function create()
    {
        return view('admin.categoryproducts.create');
    }

    // Menyimpan kategori produk baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name'           => 'required|string|max:255',
            'image'          => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Upload image
        $image = $request->file('image');
        $imagePath = $image->storeAs('public/categoryproducts/', $image->hashName());

        // Menyimpan kategori
        CategoryProduct::create([
            'name'                 => $request->name,
            'image'                => $image->hashName(),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.categoryproduct.index')->with('success', 'Kategori produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit kategori produk
    public function edit(CategoryProduct $categoryproduct)
    {
        return view('admin.categoryproduct.edit', compact('categoryproduct'));
    }

    // Mengupdate kategori produk
    public function update(Request $request, CategoryProduct $categoryproduct)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'image'                => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // If a new image is uploaded, handle the image update
        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::delete('public/categoryproducts/' . $categoryproduct->image);

            // Upload new image
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/categoryproducts/', $image->hashName());

        // Update kategori
        $categoryproduct->update([
            'name'              => $request->name,
            'image'             => $image->hashName(),
        ]);
    } else {
        //ubah category product tanpa image
        $categoryproduct->update([
            'name' => $request->name,
        ]);

        $product->save();

    }
        // Redirect dengan pesan sukses
        return redirect()->route('admin.categoryproduct.index')->with('success', 'Kategori produk berhasil diperbarui.');
    }

    // Menghapus kategori produk
    public function destroy(CategoryProduct $categoryproduct)
    {
        $categoryproduct->delete();
        return redirect()->route('admin.categoryproduct.index')->with('success', 'Kategori produk berhasil dihapus.');
    }

    public function show(string $id): View
{
    // Ambil kategori portofolio berdasarkan ID dan load portofolio yang terelasi
    $categoryproduct = CategoryProduct::with('products')->find($id);

    return view('admin.categoryproduct.show', compact('categoryproduct'));
}
}
