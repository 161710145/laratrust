<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	protected $table = 'siswas';
    protected $fillable = ['nama','ttl','jk','alamat','agama'];
    protected $timesTamp =true;

    public function absen()
    {
    	return $this->hasMany('App\Absen','siswa_id');
    }

}
