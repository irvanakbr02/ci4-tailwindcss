<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    // protected $useTimestamps = true;
    // protected $returnType = 'object';
    protected $allowedFields = ['judul', 'slug', 'nama_file'];

    public function getLaporan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
