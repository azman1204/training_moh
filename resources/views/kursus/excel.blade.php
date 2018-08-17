<table class="table table-striped">
	<tr>
		<td>Bil</td>
		<td>Tajuk</td>
		<td>Tarikh</td>
		<td>Lokasi</td>
		<td>Peserta</td>
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
	</tr>
	@endforeach
</table>