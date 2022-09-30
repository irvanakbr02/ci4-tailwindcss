<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class AdminBerita extends BaseController
{
    public function __construct()
    {
        $this->berita = new BeritaModel();
    }

    public function berita()
    {
        // $berita = $this->berita->findAll();
        $data = [
            'title' => 'Admin Artikel Bumdesa | Website Bumdes',
            'berita' => $this->berita->getBerita()
            // 'berita' => $this->berita->paginate(5, 'berita'),
            // 'pager' => $this->berita->pager
        ];


        return view('/admin/halaman/berita/berita', $data);
    }
    public function Create()
    {
        $data = [
            'title' => 'Form Tambah data berita',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/berita/create', $data);
    }

    public function Save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/berita/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/berita/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        //ubah judul file jadi random ke database
        // $namaFoto = $fileFoto->getRandomName();
        //pindah file ke folder img/
        $fileFoto->move('img');

        //ambil judul file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->berita->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'penulis' => $this->request->getVar('penulis'),
            'source' => $this->request->getVar('source'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/berita');
    }
    public function Delete($id)
    {

        //cari gambar by id database
        $berita = $this->berita->find($id);

        //hapus gambar di img
        unlink('img/' . $berita['foto']);


        $this->berita->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/berita');
    }

    public function Edit($slug)
    {
        $data = [
            'title' => 'Form Ubah data berita',
            'validation' => \Config\Services::validation(),
            'berita' => $this->berita->getBerita($slug)
        ];
        return view('admin/halaman/berita/edit', $data);
    }
    public function Update($id)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus di isi!'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('admin/berita/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            //pindah file ke folder img/
            $fileFoto->move('img');

            //ambil judul file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('img/' . $this->request->getVar('fotoLama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->berita->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'penulis' => $this->request->getVar('penulis'),
            'source' => $this->request->getVar('source'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/berita');
    }
}
