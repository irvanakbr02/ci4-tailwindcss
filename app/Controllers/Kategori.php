<?php

namespace App\Controllers;

use App\Models\BudayaModel;
use App\Models\KesenianModel;
use App\Models\KulinerModel;
use App\Models\WisataModel;

class Kategori extends BaseController
{
    protected $wisata;
    protected $kuliner;
    protected $kesenian;
    protected $budaya;
    public function __construct()
    {
        $this->wisata = new WisataModel();
        $this->kuliner = new KulinerModel();
        $this->kesenian = new KesenianModel();
        $this->budaya = new BudayaModel();
    }

    public function index()
    {
        // $wisata = $this->wisata->findAll();
        $data = [
            'title' => 'Kategori | Website Bumdes',
            // 'wisata' => $this->wisata->getWisata(),
            'kuliner' => $this->kuliner->paginate(3, 'kuliner'),
            'kesenian' => $this->kesenian->paginate(3, 'kesenian'),
            'budaya' => $this->budaya->paginate(3, 'budaya'),
            'wisata' => $this->wisata->paginate(3, 'wisata'),
            'pager' => $this->wisata->pager,
            'pager' => $this->kuliner->pager,
            'pager' => $this->budaya->pager,
            'pager' => $this->kesenian->pager
        ];
        return view('/user/kategori/kategori', $data);
    }

    public function detailwisata($slug)
    {

        $data = [
            'title' => 'Detail Wisata | Website Bumdes',
            'wisata' => $this->wisata->getWisata($slug),
        ];
        return view('/user/kategori/wisata/detail', $data);
    }
    public function detailkuliner($slug)
    {

        $data = [
            'title' => 'Detail Kuliner | Website Bumdes',
            'kuliner' => $this->kuliner->getKuliner($slug),
        ];
        return view('/user/kategori/kuliner/detail', $data);
    }
    public function detailkesenian($slug)
    {

        $data = [
            'title' => 'Detail Kesenian | Website Bumdes',
            'kesenian' => $this->kesenian->getKesenian($slug),
        ];
        return view('/user/kategori/kesenian/detail', $data);
    }
    public function detailbudaya($slug)
    {

        $data = [
            'title' => 'Detail Budaya | Website Bumdes',
            'budaya' => $this->budaya->getBudaya($slug),
        ];
        return view('/user/kategori/budaya/detail', $data);
    }
}
