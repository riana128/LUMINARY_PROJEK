@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Data Buyer</h2>
        
        <form action="{{ route('data_buyers.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" name="telepon" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="Lelaki">Lelaki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
@endsection
