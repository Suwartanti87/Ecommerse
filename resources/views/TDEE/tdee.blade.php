
Note :<br/>
<table border="1">
	<thead>
		<tr>
			<th>Aktifitas</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Sangat Ringan</td>
			<td>Hanya aktivitas biasa tanpa ada olahraga </td>
		</tr>
		<tr>
			<td>Ringan</td>
			<td>Olahraga Ringan 1-3x dalam 1 minggu </td>
		</tr>
		<tr>
			<td>Sedang</td>
			<td>Olahraga Sedang 3-5x 1 minggu </td>
		</tr>
		<tr>
			<td>Berat</td>
			<td>Olahraga Berat seperti gym 2x sehari, kerja fisik</td>
		</tr>
	</tbody>
</table>
<br><br>

<form class="user" action="/new/tdee" method="POST">
	 @csrf
 	<label>Jenis Kelamin</label>
 	<select class="form-user" name="gender">
 		<option value="male">Male</option>
 		<option value="female">Female</option>
 	</select><br/>
 	<label>BB</label>&nbsp;&nbsp;
 	<input type="text" name="BB">
 	<br/><br/>
 	<label>TB</label>&nbsp;&nbsp;
 	<input type="textArea" name="TB">
 	<br/><br/>
 	<label>Usia</label>&nbsp;&nbsp;
 	<input type="textArea" name="U">
 	<br/><br/>
 	<label>Aktifitas</label>&nbsp;&nbsp;
 	<select class="form-user" name="aktifitas">
 		<option value="1.2">Sangat Ringan</option>
 		<option value="1.375">Ringan</option>
 		<option value="1.725">Sedang</option>
 		<option value="1.9">Berat</option>
 	</select>
 	<br/><br/>
 	<input type="submit" name="kirim">
 </form>


