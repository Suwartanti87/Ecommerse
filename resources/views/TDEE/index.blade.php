@extends('layout.index')
@section('content')

<div class="container-fluid">
	<div class="card shadow mb-4">
		<center>
			<div class="card-body col-md-6 py-3">
				<h3>Note :</h3>
				<table class="table">
					<thead>
						<tr class="warning">
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
					<div class="row">
						<div class="col-md-6">
							<label>Jenis Kelamin</label>
							<select class="form-control" name="gender">
								<option value="">Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="col-md-6">
							<label>Aktifitas</label>&nbsp;&nbsp;
							<select class="form-control" name="aktifitas">
								<option value="">Aktifitas</option>
								<option value="1.2">Sangat Ringan</option>
								<option value="1.375">Ringan</option>
								<option value="1.725">Sedang</option>
								<option value="1.9">Berat</option>
							</select>

						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-4">
							<label>Berat Badan (kg)</label>&nbsp;&nbsp;
							<input class="form-control" type="text" name="BB">
						</div>
						<div class="col-md-4">
							<label>Tinggi Badan (cm)</label>&nbsp;&nbsp;
							<input class="form-control" type="textArea" name="TB">
						</div>
						<div class="col-md-4">
							<label>Usia (Tahun)</label>&nbsp;&nbsp;
							<input class="form-control" type="textArea" name="U">
						</div>
					</div>

					<br/>
					<center>
						<button class="btn btn-warning" type="submit" name="kirim">Hitung</button>
					</center>
				</form>
			</div>
		</center>
		<br/>
		@if (session()->has('kb'))
					
		<div class="card mb-4 py-3 border-bottom-warning">
			<div class="card-body">
				<center>
					Kalori dalam Tubuh Anda adalah : <br/> 
						{{ session()->get('kb') }}
				</center>
			</div>
		</div>
		@endif
	</div>
</div>

@endsection