<?php

namespace App\Models;
use CodeIgniter\Model;
class PesananModel extends Model{
    protected $table='tb_pesanan';
    protected $primarykey='id';
    protected $allowedFields=['user_id','nama_pemesan','no_meja','total_harga','tanggal'];
}