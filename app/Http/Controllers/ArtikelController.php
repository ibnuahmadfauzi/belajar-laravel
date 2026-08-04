<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    private $data_artikel = [
        [
            'id' => 1,
            'judul' => "Ini adalah artikel pertama",
            'penulis' => "Novalina",
            'tanggal_publikasi' => '01-08-2026',
            'kategori' => 'kesehatan',
            'isi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum."
        ],
        [
            'id' => 2,
            'judul' => "Ini adalah artikel kedua",
            'penulis' => "Kenji",
            'tanggal_publikasi' => '01-08-2026',
            'kategori' => 'kesehatan',
            'isi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum."
        ],
        [
            'id' => 3,
            'judul' => "Ini adalah artikel ketiga",
            'penulis' => "Nopal",
            'tanggal_publikasi' => '01-08-2026',
            'kategori' => 'kesehatan',
            'isi' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library in London, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software like Aldus PageMaker and Microsoft Word including versions of Lorem Ipsum."
        ],
    ];

    // menampilkan daftar artikel
    public function index()
    {
        $data_artikel = $this->data_artikel;
        return view('pages.daftar-artikel', [
            'data_artikel' => $data_artikel
        ]);
    }

    // Create
    public function create() {}

    // Read
    public function show() {}

    // Update
    public function update() {}

    // Delete
    public function delete() {}
}
