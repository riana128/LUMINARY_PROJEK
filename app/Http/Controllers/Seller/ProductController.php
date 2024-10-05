<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fungsi Index untuk menampilkan daftar produk
    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Mengambil semua produk tanpa filter seller_id karena sudah dihapus
        $products = Product::with('category')->get();  // Jika tidak ada seller_id lagi

        // Mengirim data produk ke view untuk ditampilkan
        return view('seller.products.index', compact('products'));
    }

    // Fungsi untuk menyimpan produk
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Menyimpan produk tanpa seller_id
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            // seller_id dihapus dari sini
        ]);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Fungsi untuk menampilkan form pembuatan produk
    public function create()
    {
        // Ambil semua kategori
        $categories = Category::all();

        // Kirim data kategori ke view
        return view('seller.products.create', compact('categories'));
    }

    // Fungsi untuk mengupdate produk
    public function update(Request $request, Product $product)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Mengupdate data produk yang ada
        $product->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil diupdate.');
    }

    // Fungsi untuk menghapus produk
    public function destroy(Product $product)
    {
        // Menghapus produk dari database
        $product->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }
}
