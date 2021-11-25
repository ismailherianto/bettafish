<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mLelang extends Model
{
    protected $table = 't_lelang';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function toPenawaran()
    {
        return $this->hasOne(Penawaran::class,'lelang_id','id');
    }
}
