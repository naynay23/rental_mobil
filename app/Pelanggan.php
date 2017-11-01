<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $table = 'tbl_pelanggan';
    public $timestamps = false;
    protected $primaryKey = 'id_pelanggan';
}
