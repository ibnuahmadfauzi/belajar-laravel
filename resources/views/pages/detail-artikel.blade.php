@extends('layouts.app')
@section('judul-tab', 'Halaman Daftar Artikel')

@section('konten-utama')

<h2>{{ $data_artikel['judul'] }}</h2>
<p>
    Penulis : {{ $data_artikel['penulis'] }}
    <br>
    Tanggal : {{ $data_artikel['tanggal_publikasi'] }}
    <br>
    Kategori : {{ $data_artikel['kategori'] }}
</p>
<p>
    {{ $data_artikel['isi'] }}
</p>

<p>
    <a href="/artikel">Kembali</a>
</p>

@endsection