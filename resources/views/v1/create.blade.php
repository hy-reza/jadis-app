<!-- create.blade.php-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CREATE</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<h2>Penambahan</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br />
		@endif
		@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
		@endif
		<form method="post" action="{{url('v1')}}">
		@csrf	
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="nim" placeholder="NIM">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="nama" placeholder="NAMA">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="jurusan" placeholder="JURUSAN">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="fakultas" placeholder="FAKULTAS">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<textarea class="form-control" name="alamat" placeholder="ALAMAT"></textarea>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="form-group col-md-4">
			<button type="submit" class="btn btn-success" style="margin-left: 38px">Tambah</button>
		</div>
	</div>
		</form>
	</div>

</body>
</html>