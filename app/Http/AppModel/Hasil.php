<?php

namespace App\AppModel;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $guarded = ['id', 'pendaftar_id', 'jurusan_id', 'penguji_id' ,'created_at', 'updated_at'];

    public function jurusan()
    {
    	return $this->belongsTo('App\AppModel\Jurusan'); 
    }

    public function pendaftar()
    {
    	return $this->belongsTo('App\AppModel\Pendaftar'); 
    }

    public function penguji()
    {
    	return $this->belongsTo('App\AppModel\Penguji'); 
    }
}
