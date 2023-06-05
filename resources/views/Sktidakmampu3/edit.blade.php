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
		<form method="post" action="{{action('Sktidakmampu3Controller@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
      </div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama Lengkap :</label>
					<input type="text" class="form-control" name="nama" value="{{$Sktidakmampu3->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
      </div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Jenis Kelamin :</label>
					<input type="text" class="form-control" name="jenis_kelamin" value="{{$Sktidakmampu3->jenis_kelamin}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
      </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Tempat, Tanggal Lahir :</label>
        <input type="text" class="form-control" name="ttl" value="{{$Sktidakmampu3->ttl}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Agama :</label>
        <input type="text" class="form-control" name="agama" value="{{$Sktidakmampu3->agama}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
  </div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Status :</label>
    <input type="text" class="form-control" name="status" value="{{$Sktidakmampu3->status}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan" value="{{$Sktidakmampu3->pekerjaan}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Sktidakmampu3->alamat}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Terdaftar pada Tahun :</label>
    <input type="year" class="form-control" name="tahun" value="{{$Sktidakmampu3->tahun}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pembuatan Surat :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Sktidakmampu3->tgl_hari_ini}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Kepala Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Sktidakmampu3->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
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
