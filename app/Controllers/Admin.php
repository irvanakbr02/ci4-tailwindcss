<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\LaporanModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->laporan = new LaporanModel();
        $this->berita = new BeritaModel();
    }
    public function index()
    {
        $data = [
            'title' => ' Dashboard Admin Website Bumdesa',
            'laporan' => $this->laporan->paginate(3, 'laporan'),
            'berita' => $this->berita->paginate(3, 'berita'),

            'pager' => $this->laporan->pager,
            'pager' => $this->berita->pager,
        ];
        return view('admin/halaman/dashboard', $data);
    }
    public function login()
    {
        $data = [
            'title' => ' Login Website Bumdesa',
        ];
        return view('auth/login', $data);
    }
    public function laporan()
    {
        $data = [
            'title' => 'Laporan Admin | Website Bumdes',
            'laporan' => $this->laporan->getLaporan()
            // 'laporan' => $this->laporan->paginate(5, 'laporan'),
            // 'pager' => $this->laporan->pager
        ];

        return view('/admin/halaman/laporan/laporan', $data);
    }
    public function berita()
    {
        // $berita = $this->beritaModel->findAll();
        $data = [
            'title' => 'Admin Artikel Bumdesa | Website Bumdes',
            // 'berita' => $this->berita->getBerita()
            'berita' => $this->berita->paginate(3, 'berita'),
            'pager' => $this->berita->pager
        ];


        return view('/admin/halaman/berita/berita', $data);
    }
    public function wisata()
    {
        // $wisata = $this->wisata->findAll();
        $data = [
            'title' => 'Admin Wisata | Website Bumdes',
            // 'wisata' => $this->wisata->getPariwisata()
            'wisata' => $this->wisata->paginate(3, 'wisata'),
            'pager' => $this->wisata->pager
        ];


        return view('/admin/halaman/kategori/wisata/wisata', $data);
    }
}
