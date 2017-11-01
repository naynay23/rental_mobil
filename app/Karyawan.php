<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'tbl_karyawan';
    public $timestamps = false;
    protected $primaryKey = 'id_karyawan';
}
