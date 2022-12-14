<?php

namespace App\Models;

use CodeIgniter\Model;

class KesenianModel extends Model
{
    protected $table = 'kesenian';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'deskripsi', 'foto'];


    public function getKesenian($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
