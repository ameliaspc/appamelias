<?php

namespace App\Models;
use codeIgniter\model;
class DetailModel extends Model{
    protected $table='tb_detail_pesanan';
    protected $primarykey='id';
    protected $allowedFields=['pesanan_id','menu_id','jumlah','total_harga'];
}