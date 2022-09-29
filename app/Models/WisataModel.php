<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'pariwisata';
    protected $useTimestamps = true;

    public function getWisata($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
