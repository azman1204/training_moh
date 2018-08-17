<legend>Daftar / Kemaskini Kursus</legend>

<form method="post" action="{{ url('kursus/save') }}">
	Tajuk : <input type="text" name="tajuk">
	Lokasi : <input type="text" name="lokasi">
	Tarikh : <input type="date" name="tajuk">
	<input type="submit" value="Submit">
</form>