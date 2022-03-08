<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model{
        protected $table='tb_user';
        protected $primarykey='id';
        protected $allowedFields=['nama','username','password','role'];
    }