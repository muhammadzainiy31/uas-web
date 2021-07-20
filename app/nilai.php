<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table        = 'nilai';
    protected $fillable     = ['makul_id', 'mahasiswa_id'];
    public    $timestamps   = false;
}
