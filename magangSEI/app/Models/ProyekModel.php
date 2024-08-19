<?php

namespace App\Models;

use CodeIgniter\Model;

class ProyekModel extends Model
{
    protected $table = 'proyek';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['nama_proyek', 'client', 'pimpinan_proyek', 'keterangan', 'tgl_mulai', 'tgl_selesai'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $dateFormat    = 'datetime';

    protected $beforeInsert = ['setDates'];

    protected function setDates(array $data)
    {
        $data['data']['tgl_mulai'] = date('Y-m-d H:i:s');
        $data['data']['tgl_selesai'] = date('Y-m-d H:i:s');
        return $data;
    }
}