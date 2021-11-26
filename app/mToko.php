<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mToko extends Model
{
    protected $table      = 't_barang';
    protected $primaryKey = 'id';
    public    $timestamps = false;
}
