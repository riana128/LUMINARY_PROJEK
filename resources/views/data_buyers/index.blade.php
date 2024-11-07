@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Profil Buyer</h2>

        <!-- Tambah Button -->
        <a href="{{ route('data_buyers.create') }}" class="btn btn-primary mb-3">Tambah Data Buyer</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_buyers as $dataBuyer)
                    <tr>
                        <td>{{ $dataBuyer->name }}</td>
                        <td>{{ $dataBuyer->email }}</td>
                        <td>{{ $dataBuyer->telepon }}</td>
                        <td>{{ $dataBuyer->jenis_kelamin }}</td>
                        <td>{{ $dataBuyer->tanggal_lahir }}</td>
                        <td>{{ $dataBuyer->alamat }}</td>
                        <td>
                            <a href="{{ route('data_buyers.edit', $dataBuyer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('data_buyers.destroy', $dataBuyer->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection