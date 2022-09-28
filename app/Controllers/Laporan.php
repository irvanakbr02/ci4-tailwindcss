<?php

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $laporan;
    public function __construct()
    {

        $this->laporan = new LaporanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Laporan | Website Bumdes',
            'laporan' => $this->laporan->getLaporan()
            // 'laporan' => $this->laporan->paginate(5, 'laporan'),
            // 'pager' => $this->laporan->pager
        ];

        return view('/user/halaman/laporan', $data);
    }

    public function download($id)
    {
        $data = $this->laporan->find($id);
        // dd([$data]);
        return $this->response->download('file/' . $data['nama_file'], null);
    }
}
