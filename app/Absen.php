<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absens';
     protected $fillable = ['siswa_id','nis','tanggal','keterangan'];
     public $timestamps = true;

  public function siswa()
	{
		return $this->belongsTo('App\Siswa','siswa_id');
	}

     public function kelas() 
    {
        return $this->belongsToMany('App\Kelas', 'absen_kelas', 'absen_id', 'kelas_id');
    }
}
