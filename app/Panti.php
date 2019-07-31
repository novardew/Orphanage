<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panti extends Model
{
    protected $table = 'panti';
    protected $fillable = ['nama','alamat',  'kontak', 'email', 'sosmed', 'photo'];
}
