<?php

namespace App\Controllers;

use App\Models\BudayaModel;
use App\Models\KesenianModel;
use App\Models\KulinerModel;
use App\Models\WisataModel;

class AdminKategori extends BaseController
{
    public function __construct()
    {
        $this->wisata = new WisataModel();
        $this->kuliner = new KulinerModel();
        $this->kesenian = new KesenianModel();
        $this->budaya = new BudayaModel();
    }

    public function wisata()
    {
        // $wisata = $this->wisata->findAll();
        $data = [
            'title' => 'Admin Wisata | Website Bumdes',
            // 'wisata' => $this->wisata->getWisata()
            'wisata' => $this->wisata->paginate(3, 'wisata'),
            'pager' => $this->wisata->pager
        ];


        return view('/admin/halaman/kategori/wisata/wisata', $data);
    }
    public function kuliner()
    {
        // $wisata = $this->wisata->findAll();
        $data = [
            'title' => 'Admin Kuliner | Website Bumdes',
            // 'wisata' => $this->wisata->getWisata()
            'kuliner' => $this->kuliner->paginate(3, 'kuliner'),
            'pager' => $this->kuliner->pager
        ];


        return view('/admin/halaman/kategori/kuliner/kuliner', $data);
    }
    public function kesenian()
    {
        // $wisata = $this->wisata->findAll();
        $data = [
            'title' => 'Admin Kesenian | Website Bumdes',
            // 'wisata' => $this->wisata->getWisata()
            'kesenian' => $this->kesenian->paginate(3, 'kesenian'),
            'pager' => $this->kesenian->pager
        ];


        return view('/admin/halaman/kategori/kesenian/kesenian', $data);
    }
    public function budaya()
    {
        // $wisata = $this->wisata->findAll();
        $data = [
            'title' => 'Admin budaya | Website Bumdes',
            // 'wisata' => $this->wisata->getWisata()
            'budaya' => $this->budaya->paginate(3, 'budaya'),
            'pager' => $this->budaya->pager
        ];


        return view('/admin/halaman/kategori/budaya/budaya', $data);
    }
    public function WisataCreate()
    {
        $data = [
            'title' => 'Form Tambah data wisata',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/kategori/wisata/create', $data);
    }

    public function WisataSave()
    {
        if (!$this->validate([
            'nama' => [
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
            // return redirect()->to('admin/wisata/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/wisata/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //ubah nama file jadi random ke database
            $namaFoto = $fileFoto->getRandomName();
            //pindah file ke folder img/  
            $fileFoto->move('img', $namaFoto);
        }

        //ambil nama file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->wisata->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/kategori/wisata');
    }
    public function WisataDelete($id)
    {

        //cari gambar by id database
        $wisata = $this->wisata->find($id);

        //hapus gambar di img
        unlink('img/' . $wisata['foto']);


        $this->wisata->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/kategori/wisata');
    }

    public function WisataEdit($slug)
    {
        $data = [
            'title' => 'Form Ubah data wisata',
            'validation' => \Config\Services::validation(),
            'wisata' => $this->wisata->getWisata($slug)
        ];
        return view('admin/halaman/kategori/wisata/edit', $data);
    }
    public function WisataUpdate($id)
    {
        $wisataLama = $this->wisata->getWisata($this->request->getVar('slug'));
        if ($wisataLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[wisata.nama]';
        }


        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
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
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/wisata/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/wisata/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {

            //generate file nama random
            $namaFoto = $fileFoto->getRandomName();

            //pindah file ke folder img/
            $fileFoto->move('img', $namaFoto);

            //ambil nama file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('img/' . $this->request->getVar('fotoLama'));
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->wisata->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/kategori/wisata');
    }
    public function KulinerCreate()
    {
        $data = [
            'title' => 'Form Tambah data wisata',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/kategori/kuliner/create', $data);
    }

    public function KulinerSave()
    {
        if (!$this->validate([
            'nama' => [
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
            // return redirect()->to('admin/wisata/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/kuliner/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //ubah nama file jadi random ke database
            $namaFoto = $fileFoto->getRandomName();
            //pindah file ke folder img/  
            $fileFoto->move('img', $namaFoto);
        }

        //ambil nama file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->wisata->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/kategori/kuliner');
    }
    public function KulinerDelete($id)
    {

        //cari gambar by id database
        $kuliner = $this->kuliner->find($id);

        //hapus gambar di img
        unlink('img/' . $kuliner['foto']);


        $this->kuliner->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/kategori/kuliner');
    }

    public function KulinerEdit($slug)
    {
        $data = [
            'title' => 'Form Ubah data kuliner',
            'validation' => \Config\Services::validation(),
            'kuliner' => $this->kuliner->getKuliner($slug)
        ];
        return view('admin/halaman/kategori/kuliner/edit', $data);
    }
    public function KulinerUpdate($id)
    {
        $KulinerLama = $this->kuliner->getKuliner($this->request->getVar('slug'));
        if ($KulinerLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[kuliner.nama]';
        }


        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
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
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/kuliner/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/kuliner/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {

            //generate file nama random
            $namaFoto = $fileFoto->getRandomName();

            //pindah file ke folder img/
            $fileFoto->move('img', $namaFoto);

            //ambil nama file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('img/' . $this->request->getVar('fotoLama'));
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->kuliner->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/kategori/kuliner');
    }
    public function KesenianCreate()
    {
        $data = [
            'title' => 'Form Tambah data wisata',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/kategori/kesenian/create', $data);
    }

    public function KesenianSave()
    {
        if (!$this->validate([
            'nama' => [
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
            // return redirect()->to('admin/wisata/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/kesenian/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //ubah nama file jadi random ke database
            $namaFoto = $fileFoto->getRandomName();
            //pindah file ke folder img/  
            $fileFoto->move('img', $namaFoto);
        }

        //ambil nama file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->wisata->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/kategori/kesenian');
    }
    public function KesenianDelete($id)
    {

        //cari gambar by id database
        $kesenian = $this->kesenian->find($id);

        //hapus gambar di img
        unlink('img/' . $kesenian['foto']);


        $this->kesenian->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/kategori/kesenian');
    }

    public function KesenianEdit($slug)
    {
        $data = [
            'title' => 'Form Ubah data kesenian',
            'validation' => \Config\Services::validation(),
            'kesenian' => $this->kesenian->getBudaya($slug)
        ];
        return view('admin/halaman/kategori/kesenian/edit', $data);
    }
    public function KesenianUpdate($id)
    {
        $BudayaLama = $this->kesenian->getBudaya($this->request->getVar('slug'));
        if ($BudayaLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[kesenian.nama]';
        }


        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
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
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/kesenian/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/kesenian/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {

            //generate file nama random
            $namaFoto = $fileFoto->getRandomName();

            //pindah file ke folder img/
            $fileFoto->move('img', $namaFoto);

            //ambil nama file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('img/' . $this->request->getVar('fotoLama'));
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->kesenian->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/kategori/kesenian');
    }
    public function BudayaCreate()
    {
        $data = [
            'title' => 'Form Tambah data wisata',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/halaman/kategori/budaya/create', $data);
    }

    public function BudayaSave()
    {
        if (!$this->validate([
            'nama' => [
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
            // return redirect()->to('admin/wisata/create')->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/budaya/create')->withInput();
        }

        //ambil gambar
        $fileFoto = $this->request->getFile('foto');

        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //ubah nama file jadi random ke database
            $namaFoto = $fileFoto->getRandomName();
            //pindah file ke folder img/  
            $fileFoto->move('img', $namaFoto);
        }

        //ambil nama file untuk ke database 
        $namaFoto = $fileFoto->getName();

        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->wisata->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil ditambah.');

        return redirect()->to('/admin/kategori/budaya');
    }
    public function BudayaDelete($id)
    {

        //cari gambar by id database
        $budaya = $this->budaya->find($id);

        //hapus gambar di img
        unlink('img/' . $budaya['foto']);


        $this->budaya->delete($id);
        session()->setFlashdata('pesan', 'data berhasil di hapus.');
        return redirect()->to('/admin/kategori/budaya');
    }

    public function BudayaEdit($slug)
    {
        $data = [
            'title' => 'Form Ubah data budaya',
            'validation' => \Config\Services::validation(),
            'budaya' => $this->budaya->getKesenian($slug)
        ];
        return view('admin/halaman/kategori/budaya/edit', $data);
    }
    public function BudayaUpdate($id)
    {
        $KesenianLama = $this->budaya->getKesenian($this->request->getVar('slug'));
        if ($KesenianLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[budaya.nama]';
        }


        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
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
                    'uploaded' => "Pilih gambar terlebih dahulu",
                    'max_size' => "Ukuran gambar terlalu besar",
                    'is_image' => "Yang anda pilih bukan gambar",
                    'mime_in' => "Yang anda pilih bukan gambar"
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            // return redirect()->to('admin/budaya/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('admin/kategori/budaya/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        //cek gambar apakah tetap gambar lama
        if ($fileFoto->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {

            //generate file nama random
            $namaFoto = $fileFoto->getRandomName();

            //pindah file ke folder img/
            $fileFoto->move('img', $namaFoto);

            //ambil nama file untuk ke database 
            $namaFoto = $fileFoto->getName();

            unlink('img/' . $this->request->getVar('fotoLama'));
        }


        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->budaya->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil diubah.');

        return redirect()->to('/admin/kategori/budaya');
    }
}
