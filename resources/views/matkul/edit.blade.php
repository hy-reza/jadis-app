<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<h2>Perubahan</h2><br />
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br />
		@endif
		<form method="post" action="{{action('MatkulController@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Kode :</label>
					<input type="text" class="form-control" name="kode" value="{{$matkuls->kode}}">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$matkuls->nama}}">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left: 38px">Edit</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>
