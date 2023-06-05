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
		<form method="post" action="{{action('Sktidakmampu2Controller@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
      </div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama Lengkap :</label>
					<input type="text" class="form-control" name="nama" value="{{$Sktidakmampu2->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
      </div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Jenis Kelamin :</label>
					<input type="text" class="form-control" name="jenis_kelamin" value="{{$Sktidakmampu2->jenis_kelamin}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
      </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Tempat, Tanggal Lahir :</label>
        <input type="text" class="form-control" name="ttl" value="{{$Sktidakmampu2->ttl}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Agama :</label>
        <input type="text" class="form-control" name="agama" value="{{$Sktidakmampu2->agama}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
  </div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Status :</label>
    <input type="text" class="form-control" name="status" value="{{$Sktidakmampu2->status}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan" value="{{$Sktidakmampu2->pekerjaan}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Sktidakmampu2->alamat}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tempat Pelayanan Pengobatan :</label>
    <input type="text" class="form-control" name="tempat_pengobatan" value="{{$Sktidakmampu2->tempat_pengobatan}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Penyakit yang diderita :</label>
    <input type="text" class="form-control" name="sakit" value="{{$Sktidakmampu2->sakit}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tahun :</label>
    <input type="year" class="form-control" name="tahun" value="{{$Sktidakmampu2->tahun}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nomer Urut :</label>
    <input type="text" class="form-control" name="no_urut" value="{{$Sktidakmampu2->no_urut}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pembuatan Surat :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Sktidakmampu2->tgl_hari_ini}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Yang Berkepentingan :</label>
    <input type="text" class="form-control" name="nama_berkepentingan" value="{{$Sktidakmampu2->nama_berkepentingan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Kepala Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Sktidakmampu2->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">No :</label>
    <input type="text" class="form-control" name="no" value="{{$Sktidakmampu2->no}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Camat :</label>
    <input type="text" class="form-control" name="nama_camat" value="{{$Sktidakmampu2->nama_camat}}" onkeyup="this.value = this.value.toUpperCase();">
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
