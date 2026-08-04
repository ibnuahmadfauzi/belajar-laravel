@extends('layouts.app')
@section('judul-tab', 'Halaman Daftar Artikel')

@section('konten-utama')

@forelse ($data_artikel as $artikel)

<div class="box-artikel">
    <h4>{{ $artikel['judul'] }}</h4>
    <p>
        {{ $artikel['penulis'] }}
        <br>
        {{ $artikel['kategori'] }}
    </p>
    <p>
        <a href="#">Baca selengkapnya</a>
    </p>
</div>

@empty
<p>Tidak ada artikel.</p>
@endforelse

@endsection