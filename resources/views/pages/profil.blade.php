@extends('layouts.app')
@section('judul-tab', 'Halaman Profil')

@section('konten-utama')

<h1>Profil Siswa</h1>

<p>Nama : {{ $nama }}</p>
<p>Kelas : {{ $kelas }}</p>
<p>Sekolah : {{ $sekolah }}</p>
<p>No Absen : {{ $no_absen }}</p>

@endsection