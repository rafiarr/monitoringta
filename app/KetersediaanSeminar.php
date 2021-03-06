<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KetersediaanSeminar extends Model
{
    protected $table = 'ketersediaan_seminar';
    protected $primaryKey='id_ks';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
    'id_ks',
    'id_js',
    'id_dosen',
    'created_at',
    'updated_at',
    ];

    public function jadwalSeminar(){
    	return $this->belongsTo('App\JadwalSeminar', 'id_js', 'id_js');
    }

    public function dosen(){
    	return $this->belongsTo('App\Dosen', 'id_dosen', 'id_dosen');
    }
}
