@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Data Buyer</h2>

        <form action="{{ route('data_buyers.update', $dataBuyer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" class="form-control" value="{{ $dataBuyer->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $dataBuyer->email }}" required>
            </div>

            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" name="telepon" class="form-control" value="{{ $dataBuyer->telepon }}" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="Lelaki" {{ $dataBuyer->jenis_kelamin == 'Lelaki' ? 'selected' : '' }}>Lelaki</option>
                    <option value="Perempuan" {{ $dataBuyer->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" class="form-control" value="{{ $dataBuyer->tanggal_lahir }}" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" class="form-control" required>{{ $dataBuyer->alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Perbarui</button>
        </form>
    </div>
@endsection