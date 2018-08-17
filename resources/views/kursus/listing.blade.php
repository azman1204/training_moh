<legend>Senarai Kursus</legend>

<a href="{{ url('kursus/add') }}">Tambah Kursus</a>
<table>
	<tr>
		<td>Bil</td>
		<td>Tajuk</td>
		<td>Tarikh</td>
		<td>Lokasi</td>
		<td>Tindakan</td>
	</tr>
	@foreach ($kursus as $k)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $k->tajuk }}</td>
		<td>{{ $k->tarikh }}</td>
		<td>{{ $k->lokasi }}</td>
		<td>
			<a href="{{ url('kursus/edit', [$k->id]) }}">Edit</a> |
			<a href="{{ url('kursus/delete', [$k->id]) }}">Delete</a>
		</td>
	</tr>
	@endforeach
</table>