@extends('layout.main')
@section('body')
<legend>Senarai Kursus</legend>

<!-- search form -->
<form method="post" action="{{ url('kursus/listing') }}">
	{{ csrf_field() }}
	Tajuk:  <input type="text" name="tajuk" class="form-control">
	Lokasi: <input type="text" name="lokasi" class="form-control">
	<input type="submit" value="Search" class="btn btn-primary">
</form>

<a href="{{ url('kursus/add') }}" class="btn btn-success btn-sm">Tambah Kursus</a>
<a href="{{ url('kursus/excel') }}" class="btn btn-success btn-sm">Download Excel</a>

<table class="table table-striped">
	<tr>
		<td>Bil</td>
		<td>Tajuk</td>
		<td>Tarikh</td>
		<td>Lokasi</td>
		<td>Peserta</td>
		<td>Tindakan</td>
	</tr>
	@foreach ($kursus as $k)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $k->tajuk }}</td>
		<td>{{ $k->tarikh }}</td>
		<td>{{ $k->lokasi }}</td>
		<td>
			@foreach ($k->peserta as $peserta)
				<li>{{ $peserta->user->name }}</li>
			@endforeach
		</td>
		<td>
			<a href="{{ url('kursus/edit', [$k->id]) }}">Edit</a> |
			<a href="{{ url('kursus/delete', [$k->id]) }}">Delete</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection