<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function index()
    {
        return view('user/halaman/home');
    }
    public function kontak()
    {
        return view('user/halaman/kontak');
    }
    public function artikel()
    {
        return view('user/halaman/artikel');
    }
    public function laporan()
    {
        return view('user/halaman/laporan');
    }
}
