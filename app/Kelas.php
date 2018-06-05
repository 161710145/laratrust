<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
     public function absen() 
    {
		return $this->belongsToMany('App\Absen', 'absen_kelas', 'kelas_id', 'absen_id');
	}
}
