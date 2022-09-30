<?php

namespace App\Models;

use CodeIgniter\Model;

class BudayaModel extends Model
{
    protected $table = 'budaya';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'slug', 'deskripsi', 'foto'];


    public function getBudaya($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
