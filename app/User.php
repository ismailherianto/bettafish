<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
