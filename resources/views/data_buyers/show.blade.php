<!-- resources/views/data_buyers/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profil Buyer</title>
</head>
<body>
    <h1>Detail Profil Buyer</h1>

    <p>Nama: {{ $dataBuyer->user->name }}</p>
    <p>Email: {{ $dataBuyer->user->email }}</p>
    <p>Telepon: {{ $dataBuyer->telepon }}</p>
    <p>Jenis Kelamin: {{ $dataBuyer->jenis_kelamin }}</p>
    <p>Tanggal Lahir: {{ $dataBuyer->tanggal_lahir }}</p>
    <p>Alamat: {{ $dataBuyer->alamat }}</p>