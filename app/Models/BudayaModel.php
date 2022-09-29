<?php

namespace App\Models;

use CodeIgniter\Model;

class BudayaModel extends Model
{
    protected $table = 'budaya';
    protected $useTimestamps = true;

    public function getBudaya($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
