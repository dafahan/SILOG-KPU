<?php

namespace App\Models;

use CodeIgniter\Model;

class KebutuhanModel extends Model
{
    protected $table      = 'kebutuhan';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'kuantitas'];
}
