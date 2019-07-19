<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['nama','tempat','tanggal_lahir','jenis_klamin','alamat','jabatan','opd','hp','foto'];
}
