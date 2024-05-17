@extends('layout.list')
@section('title', 'ini adalah judul pada meta')
@section('content')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th> <!-- Tambahkan kolom Harga -->
        </tr>
    </thead>
    <tbody>
        @foreach($dataBarang as $barang) <!-- Ubah $data menjadi $dataBarang -->
            <tr>
                <td>{{ $barang['id'] }}</td> <!-- Menggunakan $barang['id'] -->
                <td>{{ $barang['nama'] }}</td> <!-- Menggunakan $barang['nama'] -->
                <td>{{ $barang['harga'] }}</td> <!-- Menggunakan $barang['harga'] -->
            </tr>
        @endforeach
    </tbody>
</table>
@endsection





