<?php

namespace App\AppModel;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function hasils()
    {
    	return $this->hasMany('App\AppModel\Hasil');
    }
}
