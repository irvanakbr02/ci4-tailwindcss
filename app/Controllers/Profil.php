<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function profil()
    {
        $data = [
            'title' => 'Profil Bumdesa',
        ];
        return view('user/profil', $data);
    }
    public function struktur()
    {
        $data = [
            'title' => 'Struktur Bumdesa',
        ];
        return view('user/profil/struktur', $data);
    }
    public function pengurus()
    {
        $data = [
            'title' => 'Pengurus Bumdesa',
        ];
        return view('user/profil/pengurus', $data);
    }
    public function visi()
    {
        $data = [
            'title' => 'Visi Misi Bumdesa',
        ];
        return view('user/profil/visi', $data);
    }
    public function unit()
    {
        $data = [
            'title' => 'Unit Usaha Bumdesa',
        ];
        return view('user/profil/unit', $data);
    }
    public function regulasi()
    {
        $data = [
            'title' => 'Regulasi Bumdesa',
        ];
        return view('user/profil/regulasi', $data);
    }
}
