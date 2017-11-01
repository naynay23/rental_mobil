<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'tbl_transaksi';
    public $timestamps = false;
    protected $primaryKey = 'id_transaksi';

    public function mobil(){
    	return $this->hasOne('App\Mobil', 'id_mobil', 'id_mobil');
    }

    public function karyawan(){
    	return $this->hasOne('App\Karyawan', 'id_karyawan', 'id_karyawan');
    }

    public function pelanggan(){
    	return $this->hasOne('App\Pelanggan', 'id_pelanggan', 'id_pelanggan');
    }
}

