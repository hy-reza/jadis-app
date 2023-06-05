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
		<form method="post" action="{{action('Spcerairujuk4Controller@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$Spcerairujuk4->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Tempat, Tanggal Lahir :</label>
					<input type="text" class="form-control" name="ttl" value="{{$Spcerairujuk4->ttl}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Agama</label>
        <input type="text" class="form-control" name="agama" value="{{$Spcerairujuk4->agama}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="name">Pekerjaan :</label>
      <input type="text" class="form-control" name="pekerjaan" value="{{$Spcerairujuk4->pekerjaan}}">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Spcerairujuk4->alamat}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Istri :</label>
    <input type="text" class="form-control" name="nama_istri" value="{{$Spcerairujuk4->nama_istri}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tempat, Tanggal Lahir Istri:</label>
    <input type="text" class="form-control" name="ttl_istri" value="{{$Spcerairujuk4->ttl_istri}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="name">Agama Istri</label>
  <input type="text" class="form-control" name="agama_istri" value="{{$Spcerairujuk4->agama_istri}}" onkeyup="this.value = this.value.toUpperCase();">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Pekerjaan Istri:</label>
<input type="text" class="form-control" name="pekerjaan_istri" value="{{$Spcerairujuk4->pekerjaan_istri}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Alamat Istri :</label>
<input type="text" class="form-control" name="alamat_istri" value="{{$Spcerairujuk4->alamat_istri}}">
</div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Wali :</label>
    <input type="text" class="form-control" name="nama_wali" value="{{$Spcerairujuk4->nama_wali}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tempat, Tanggal Lahir Wali:</label>
    <input type="text" class="form-control" name="ttl_wali" value="{{$Spcerairujuk4->ttl_wali}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
  <label for="name">Agama Wali :</label>
  <input type="text" class="form-control" name="agama_wali" value="{{$Spcerairujuk4->agama_wali}}" onkeyup="this.value = this.value.toUpperCase();">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Pekerjaan Wali :</label>
<input type="text" class="form-control" name="pekerjaan_wali" value="{{$Spcerairujuk4->pekerjaan_wali}}">
</div>
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="form-group col-md-4">
<label for="name">Alamat Wali :</label>
<input type="text" class="form-control" name="alamat_wali" value="{{$Spcerairujuk4->alamat_wali}}">
</div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pelaksanaan :</label>
    <input type="date" class="form-control" name="tgl_pelaksaan" value="{{$Spcerairujuk4->tgl_pelaksaan}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Maskawin :</label>
    <input type="text" class="form-control" name="maskawin" value="{{$Spcerairujuk4->maskawin}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Saksi 1 :</label>
    <input type="text" class="form-control" name="saksi1" value="{{$Spcerairujuk4->saksi1}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Saksi 2 :</label>
    <input type="text" class="form-control" name="saksi2" value="{{$Spcerairujuk4->saksi2}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pembuatan Surat :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Spcerairujuk4->tgl_hari_ini}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Kepala Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Spcerairujuk4->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
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
