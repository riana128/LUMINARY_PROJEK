<?php

namespace App\Http\Controllers;

use App\Models\DataBuyer; // Import Model DataBuyer
use Illuminate\Http\Request;
use App\Models\User;

class DataBuyerController extends Controller
{
    public function index()
    {
        $data_buyers = DataBuyer::all(); // Menampilkan semua data buyer
        return view('data_buyers.index', compact('data_buyers'));
    }

    public function create()
    {
        return view('data_buyers.create');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:data_buyers,email',
            'telepon' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:Lelaki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
        ]);

        // Menyimpan data buyer baru
        DataBuyer::create($request->all());

        return redirect()->route('data_buyers.index')->with('success', 'Data Buyer Berhasil Ditambahkan');
    }

    public function edit(DataBuyer $dataBuyer)
    {
        return view('data_buyers.edit', compact('dataBuyer'));
    }

    public function update(Request $request, DataBuyer $dataBuyer)
    {
        // Validasi input form saat update
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:data_buyers,email,' . $dataBuyer->id, // Pastikan email unique kecuali milik buyer yang sedang diupdate
            'telepon' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:Lelaki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
        ]);

        // Mengupdate data buyer
        $dataBuyer->update($request->all());

        return redirect()->route('data_buyers.index')->with('success', 'Data Buyer Berhasil Diperbarui');
    }

    public function destroy(DataBuyer $dataBuyer)
    {
        // Menghapus data buyer
        $dataBuyer->delete();

        return redirect()->route('data_buyers.index')->with('success', 'Data Buyer Berhasil Dihapus');
    }

    public function show(DataBuyer $dataBuyer)
    {
        // Menampilkan detail profil buyer
        return view('data_buyers.show', compact('dataBuyer'));
    }

    // baru menambahkan ini, setelah method registrasi
    public function storeDataBuyer(Request $request, User $user)
    {
    $dataBuyer = new DataBuyer();
    $dataBuyer->user_id = $user->id; // Ambil ID user yang baru terdaftar
    $dataBuyer->name = $request->input('name');
    $dataBuyer->email = $request->input('email');
    $dataBuyer->phone = $request->input('phone');
    $dataBuyer->gender = $request->input('gender');
    $dataBuyer->birth_date = $request->input('birth_date');
    $dataBuyer->address = $request->input('address');
    $dataBuyer->save();
    }
}