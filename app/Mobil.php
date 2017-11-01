<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    //
    protected $table = 'tbl_mobil';
    public $timestamps = false;
    protected $primaryKey = 'id_mobil';

    public function merk(){
    	return $this->hasOne('App\Merk', 'id_merk', 'id_merk');
    }
}
