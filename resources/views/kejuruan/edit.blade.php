@extends('layouts.app')
@section('content')

<div class="row">
<div class="container">
	<center><h1>Edit Data Kejuruan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Kejuruan</div>

		<div class="panel-body">
			<form action="{{route('kejuruan.update')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Kode kejuruan</label>
					<input type="text" name="kd_kejuruan" value="{{$kejuruan->kd_kejuruan}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Nama Kejuruan</label>
					<input type="text" name="nama_kejuruan" value="{{$kejuruan->nama_kejuruan}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Keterangan</label>
					<input type="text" name="keterangan" value="{{$keterangan->keterangan}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>
</div>	
@endsection