<?php
namespace App\Http\Controllers;
use App\Kursus;
use Validator;
use View;
use Illuminate\Http\Request;

class KursusController extends Controller {
	// download data as excel
	function excel() {
		$kursus = Kursus::all();
		$view = View::make('kursus.excel', ['kursus' => $kursus]); // return view()
		$html = $view->render();
		return response($html)
		->header('Content-Type', 'application/vnd.ms-excel')
		->header('Content-Disposition', 'attachment; filename="data.xls"');
	}

	// list all kursus
	function listing(Request $req) {
		if ($req->has('tajuk')) {
			// search
			$tajuk = $req->input('tajuk');
			$lokasi = $req->input('lokasi');
			$kursus = Kursus::where('tajuk', 'like', "%$tajuk%")
			->where('lokasi', 'like', "%$lokasi%")
			->get();
		} else {
			// list all
			$kursus = Kursus::all();
		}
		
		//dd($kursus);
		return view('kursus.listing')->with('kursus', $kursus);
	}

	function add() {
		$kursus = new Kursus();
		return view('kursus.form')->with('kursus',$kursus);
	}

	// semua data dr. form disubmit ke sini
	function save(Request $req) {
		$id = $req->input('id');
		if (! empty($id)) {
			// update
			$kursus = Kursus::find($id);
		} else {
			// insert
			$kursus = new Kursus();
		}

		$kursus->tajuk  = $req->input('tajuk');
		$kursus->lokasi = $req->input('lokasi');
		$kursus->tarikh = $req->input('tarikh');

		// validation
		$data  = $req->all();
		$rules = [
			'tajuk'  => 'required|min:5',
			'lokasi' => 'required',
			'tarikh' => 'required'
		];
		$v = Validator::make($data, $rules);
		// if (! $v->passes())
		if ($v->fails()) {
			// show back the form with prev value
			return view('kursus.form')
			->with('kursus', $kursus)
			->withErrors($v);
		} else {
			// semua validation ok
			$kursus->save();
			return redirect('kursus/listing');
		}
	}

	function delete($id) {
		$kursus = Kursus::find($id);
		$kursus->delete();
		return redirect('kursus/listing');
	}

	function edit($id) {
		$kursus = Kursus::find($id);
		return view('kursus.form')->with('kursus', $kursus);
	}
}
