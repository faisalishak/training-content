<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    
    // public function kelas()
    // {
    //     return $this->hasOne('App\Kelas', 'id_kelas');
    // }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
