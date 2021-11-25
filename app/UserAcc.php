<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAcc extends Model
{
    public $timestamps = false;
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'passStr',
        'kontak',
        'alamat',
        'instagram'
    ];
}
