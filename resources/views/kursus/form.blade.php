@extends('layout.main')
@section('body')
<legend>Daftar / Kemaskini Kursus</legend>

@foreach($errors->all() as $err) 
	{{ $err }}
@endforeach

<form method="post" action="{{ url('kursus/save') }}">
	{{ csrf_field() }}
	<input type="hidden" name="id" value="{{ $kursus->id }}">
	Tajuk : <input type="text" name="tajuk" value="{{ $kursus->tajuk }}">
	Lokasi : <input type="text" name="lokasi" value="{{ $kursus->lokasi }}">
	Tarikh : <input type="date" name="tarikh" value="{{ $kursus->tarikh }}">
	<input type="submit" value="Submit">
</form>
@endsection