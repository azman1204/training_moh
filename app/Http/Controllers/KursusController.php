<?php
namespace App\Http\Controllers;
use App\Kursus;

class KursusController extends Controller {
	// list all kursus
	function listing() {
		$kursus = Kursus::all();
		//dd($kursus);
		return view('kursus.listing')->with('kursus', $kursus);
	}

	function add() {
		$kursus = new Kursus();
		return view('kursus.form')->with('kursus',$kursus);
	}

	function save() {

	}

	function delete($id) {

	}

	function edit($id) {

	}
}
