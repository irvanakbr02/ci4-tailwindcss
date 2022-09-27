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
}
