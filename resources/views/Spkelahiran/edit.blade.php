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
		<form method="post" action="{{action('SpkelahiranController@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$Spkelahiran->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nik :</label>
					<input type="text" class="form-control" name="nik" value="{{$Spkelahiran->nik}}">
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">No.KK :</label>
        <input type="text" class="form-control" name="nomor_kk" value="{{$Spkelahiran->nomor_kk}}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="name">Jenis Kelamin :</label>
      <input type="text" class="form-control" name="jenis_kelamin" value="{{$Spkelahiran->jenis_kelamin}}" onkeyup="this.value = this.value.toUpperCase();">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan" value="{{$Spkelahiran->pekerjaan}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Spkelahiran->alamat}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Anak :</label>
    <input type="text" class="form-control" name="nama_meninggal" value="{{$Spkelahiran->nama_anak}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tempat, Tanggal Lahir :</label>
    <input type="text" class="form-control" name="ttl" value="{{$Spkelahiran->ttl}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Kelahiran Ke :</label>
    <input type="text" class="form-control" name="kelahiran_ke" value="{{$Spkelahiran->kelahiran_ke}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Ayah :</label>
    <input type="text" class="form-control" name="nama_ayah" value="{{$Spkelahiran->nama_ayah}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Ibu :</label>
    <input type="text" class="form-control" name="nama_ibu" value="{{$Spkelahiran->nama_ibu}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan Orang Tua :</label>
    <input type="text" class="form-control" name="pekerjaan_ortu" value="{{$Spkelahiran->pekerjaan_ortu}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat Orang Tua :</label>
    <input type="text" class="form-control" name="alamat_ortu" value="{{$Spkelahiran->alamat_ortu}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pembuatan Surat :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Spkelahiran->tgl_hari_ini}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Kepala Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Spkelahiran->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Yang Membuat Pernyataan :</label>
    <input type="text" class="form-control" name="nama_pernyataan" value="{{$Spkelahiran->nama_pernyataan}}" onkeyup="this.value = this.value.toUpperCase();">
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
