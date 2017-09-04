@extends('layouts.app')
@section('content')

<div class="row">
<div class="container">
<div class="panel panel-primary">
		<div class="panel-heading">Kejuruan</div>

	<div class="panel-body">
			
				<div class="form-group">
					<label class="control-lable">Kode : </label>
					<input type="text" name="kd_kejuruan" class="form-group" required="">
					<label class="control-lable">Nama : </label>
  						<select name="nama_kejuruan" class="form-group">
							@foreach ($kejuruan as $data)
	  						<option value="{{ $data->id }}">{{ $data->NOPOL }} {{ $data->nama_kejuruan}}</option>
							@endforeach
  						</select>
				
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Cari</button>
				</div>
		</div>

	<td>
		<a class="btn btn-primary" href="kejuruan/create">Tambah</a>
	

		<a class="btn btn-primary" href="kejuruan/edit">Ubah</a>
	
	
	<form action="" method="post">
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token">
		<input class="btn btn-primary" type="submit" value="Delete">
		{{csrf_field()}}
	</form>
	</td>

	<br>
	<br>
	<br>

	<td>
	<div class="row">
	<div class="container">
	<div class="panel panel-primary">
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Select</th>
					<th>Kode kejuruan</th>
					<th>Nama Kejuruan</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
					@foreach($kejuruan as $data)
				<tr>
				<td><input type="checkbox" class="pilih" name="id"></td>
					<td>{{$data->kd_kejuruan}}</td>
					<td>{{$data->nama_kejuruan}}</td>
					<td>{{$data->keterangan}}</td>
				</tr>
					@endforeach
			</tbody>
		</table>
	</div>
	</div>
</div>	
</div>
</td>
@endsection