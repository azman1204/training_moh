<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model {
	// see also private vs public vs protected
	// protected open all to inherited class
	protected $table = 'kursus';

	// kursus.id -> peserta.kursus_id (ikut convention)
	// dlm kes ini x ikut convention.. so kena configure
	function peserta() {
		return $this->hasMany('App\Peserta', 'id_kursus');
	}
}