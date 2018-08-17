<legend>Senarai Kursus</legend>

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
		<td></td>
		<td>{{ $k->tajuk }}</td>
		<td>{{ $k->tarikh }}</td>
		<td>{{ $k->lokasi }}</td>
		<td></td>
	</tr>
	@endforeach
</table>