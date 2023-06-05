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
		<form method="post" action="{{action('Spcerairujuk2Controller@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$Spcerairujuk2->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">NIK :</label>
					<input type="text" class="form-control" name="nik" value="{{$Spcerairujuk2->nik}}">
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Tempat, Tanggal Lahir :</label>
        <input type="text" class="form-control" name="ttl" value="{{$Spcerairujuk2->ttl}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="name">Pekerjaan :</label>
      <input type="text" class="form-control" name="pekerjaan" value="{{$Spcerairujuk2->pekerjaan}}">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Spcerairujuk2->alamat}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama :</label>
    <input type="text" class="form-control" name="nama_sah" value="{{$Spcerairujuk2->nama_sah}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">NIK :</label>
    <input type="text" class="form-control" name="nik_sah" value="{{$Spcerairujuk2->nik_sah}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tempat, Tanggal Lahir :</label>
    <input type="text" class="form-control" name="ttl_sah" value="{{$Spcerairujuk2->ttl_sah}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan_sah" value="{{$Spcerairujuk2->pekerjaan_sah}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat_sah" value="{{$Spcerairujuk2->alamat_sah}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Suami/Istri :</label>
    <input type="text" class="form-control" name="suami" value="{{$Spcerairujuk2->suami}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Negara :</label>
    <input type="text" class="form-control" name="negara" value="{{$Spcerairujuk2->negara}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Sekarang :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Spcerairujuk2->tgl_hari_ini}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Kepala Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Spcerairujuk2->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
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
