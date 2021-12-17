<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    protected $table = 't_penawaran';
    protected $primaryKey = 'id';

    protected $fillable = [
        'harga_tawar',
        'lelang_id',
        'user_id'
    ];
    
    public function toUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function toLelang()
    {
        return $this->belongsTo(mLelang::class,'lelang_id','id');
    }
}
