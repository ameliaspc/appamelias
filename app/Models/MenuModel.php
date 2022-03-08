<?php
    namespace App\Models;

    use CodeIgniter\model;

    class MenuModel extends Model{
        protected $table   ='tb_menu';
        protected $primarykey='id';
        protected $allowedFields = ['nama','harga','jenis','stok','gambar'];
}