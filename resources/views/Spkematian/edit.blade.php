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
		<form method="post" action="{{action('SpkematianController@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$Spkematian->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nik :</label>
					<input type="text" class="form-control" name="nik" value="{{$Spkematian->nik}}">
				</div>
			</div>
		</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">No.KK :</label>
        <input type="text" class="form-control" name="nomor_kk" value="{{$Spkematian->nomor_kk}}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="name">Jenis Kelamin :</label>
      <input type="text" class="form-control" name="jenis_kelamin" value="{{$Spkematian->jenis_kelamin}}" onkeyup="this.value = this.value.toUpperCase();">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan" value="{{$Spkematian->pekerjaan}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Spkematian->alamat}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Status Hubungan Keluarga :</label>
    <input type="text" class="form-control" name="status_hubungan_keluarga" value="{{$Spkematian->status_hubungan_keluarga}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Meninggal :</label>
    <input type="text" class="form-control" name="nama_meninggal" value="{{$Spkematian->nama_meninggal}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nik Meninggal :</label>
    <input type="text" class="form-control" name="nik_meninggal" value="{{$Spkematian->nik_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">nomor_kk_meninggal :</label>
    <input type="text" class="form-control" name="nomor_kk_meninggal" value="{{$Spkematian->nomor_kk_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Ttl Meninggal :</label>
    <input type="text" class="form-control" name="ttl_meninggal" value="{{$Spkematian->ttl_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat Meninggal :</label>
    <input type="text" class="form-control" name="alamat_meninggal" value="{{$Spkematian->alamat_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Meninggal :</label>
    <input type="date" class="form-control" name="tanggal_meninggal" value="{{$Spkematian->tanggal_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pukul Meninggal :</label>
    <input type="time" class="form-control" name="pukul_meninggal" value="{{$Spkematian->pukul_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Dialamat Meninggal :</label>
    <input type="text" class="form-control" name="dialamat_meninggal" value="{{$Spkematian->dialamat_meninggal}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pembuatan Surat :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Spkematian->tgl_hari_ini}}">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Yang Membuat Pernyataan :</label>
    <input type="text" class="form-control" name="nama_pernyataan" value="{{$Spkematian->nama_pernyataan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Ketua RT :</label>
    <input type="text" class="form-control" name="nama_rt" value="{{$Spkematian->nama_rt}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Kepada Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Spkematian->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Ketua RW :</label>
    <input type="text" class="form-control" name="nama_rw" value="{{$Spkematian->nama_rw}}" onkeyup="this.value = this.value.toUpperCase();">
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
