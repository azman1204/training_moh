<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model {
	// see also private vs public vs protected
	// protected open all to inherited class
	protected $table = 'kursus';
}