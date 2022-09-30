<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\LaporanModel;

class AdminLaporan extends BaseController
{
    public function __construct()
    {
        $this->laporan = new LaporanModel();
        $this->berita = new BeritaModel();
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
    public function LaporanCreate()
    {
        $data = [
            'title' => 'Form Tambah data laporan',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/laporan/create', $data);
    }

    public function LaporanSave()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'nama_file' => [
                'rules' => 'uploaded[nama_file]|max_size[nama_file,1024]',
                'errors' => [
                    'uploaded' => "Pilih file terlebih dahulu",
                    'max_size' => "Ukuran file terlalu besar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/laporan/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/laporan/create')->withInput();
        }

        //ambil file
        $fileFoto = $this->request->getFile('nama_file');

        //ubah judul file jadi random ke database
        // $namaFoto = $fileFoto->getRandomName();
        //pindah file ke folder file/
        $fileFoto->move('file');

        //ambil judul file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->laporan->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'nama_file' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/laporan');
    }
    public function LaporanDelete($id)
    {

        //cari file by id database
        $laporan = $this->laporan->find($id);

        //hapus file di file
        unlink('file/' . $laporan['nama_file']);


        $this->laporan->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/laporan');
    }

    public function LaporanEdit($slug)
    {
        $data = [
            'title' => 'Form Ubah data laporan',
            'validation' => \Config\Services::validation(),
            'laporan' => $this->laporan->getLaporan($slug)
        ];
        return view('admin/halaman/laporan/edit', $data);
    }
    public function LaporanUpdate($id)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'nama_file' => [
                'rules' => 'max_size[nama_file,1024]',
                'errors' => [
                    'max_size' => "Ukuran file terlalu besar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('admin/laporan/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('nama_file');

        //cek file apakah tetap file lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fileLama');
        } else {
            //pindah file ke folder file/
            $fileFoto->move('file');

            //ambil judul file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('file/' . $this->request->getVar('fileLama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->laporan->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'nama_file' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/laporan');
    }
}
