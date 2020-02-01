<?php

namespace App\AppModel;

use Illuminate\Database\Eloquent\Model;

class Penguji extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function hasils()
    {
    	return $this->hasMany('App\AppModel\Hasil');
    }
}
