<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjung extends Model
{
    protected $table = 'kunj_undgn';
    protected $fillable = ['id','panti_id', 'nik_user', 'nama','tgl', 'waktu', 'durasi','tempat','detail', 'berkas','status_id'];
}
