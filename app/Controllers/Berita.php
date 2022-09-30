<?php

namespace App\Controllers;

use App\Models\BeritaModel;


class Berita extends BaseController
{
    protected $modelberita;
    public function __construct()
    {

        $this->modelberita = new BeritaModel();
    }
    public function berita()
    {
        $data = [
            'title' => 'Berita | Website Bumdes',
            // 'berita' => $this->modelberita->getBerita()
            'berita' => $this->modelberita->paginate(2, 'berita'),
            'pager' => $this->modelberita->pager
        ];


        return view('/user/berita/berita', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Berita | Website Bumdes',
            'berita' => $this->modelberita->getBerita($slug)
        ];

        return view('/user/berita/detail', $data);
    }
}
