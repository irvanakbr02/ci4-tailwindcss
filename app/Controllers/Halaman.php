<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Halaman extends BaseController
{
    protected $berita;
    public function __construct()
    {
        $this->berita = new BeritaModel();
    }
    public function index()
    {
        $data = [
            'title' => ' Website Bumdesa',
            'berita' => $this->berita->paginate(3, 'berita'),
            'pager' => $this->berita->pager
        ];
        return view('user/halaman/home', $data);
    }
    public function kontak()
    {
        $data = [
            'title' => 'Kontak Kami | Website Bumdesa'
        ];

        return view('user/halaman/kontak', $data);
    }
    public function kontaksave()
    {
        session()->setFlashdata('pesan', 'Pesan berhasil terkirim');

        return redirect()->to('/kontak');
    }
    public function artikel()
    {
        $data = [
            'title' => 'Artikel Bumdesa | Website Bumdesa'
        ];
        return view('user/halaman/artikel', $data);
    }
    public function laporan()
    {
        $data = [
            'title' => 'Laporan Bumdesa | Website Bumdesa'
        ];
        return view('user/halaman/laporan', $data);
    }
}
