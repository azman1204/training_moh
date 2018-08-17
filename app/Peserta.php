<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model {
	protected $table = 'peserta';

	// peserta.user_id -> user.id (ikut convention)
	function user() {
		return $this->belongsTo('App\User', 'id_user');
	}
}