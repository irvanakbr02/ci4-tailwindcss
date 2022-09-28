<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'deskripsi', 'foto', 'source'];

    public function getBerita($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
