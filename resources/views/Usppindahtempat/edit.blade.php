<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/Adminhome/images/tiitle.png')}}">
	<title>Desa Junrejo</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{asset('assets/Adminhome/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Custom CSS -->

	<link href="{{asset('assets/Adminhome/css/lib/calendar2/semantic.ui.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/Adminhome/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/Adminhome/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/Adminhome/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/Adminhome/css/helper.css')}}" rel="stylesheet">
	<link href="{{asset('assets/Adminhome/css/style.css')}}" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
	<!--[if lt IE 9]>
	<script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/home">
                        <!-- Logo icon -->
                        <b><img src="{{asset('assets/Adminhome/images/jambuwer.jpeg')}}" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">

                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">


                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/Adminhome/images/users/5.jpg')}}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>

                        <li><a href="/home"><i class="fa fa-tachometer"></i>Dashboard </a></li>
                        <li><a  href="{{ route('Uskjualbelitanah.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Ket. Jual Beli Tanah </a></li>
                        <li><a href="{{ route('Uskpenerimaanpensiun.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Ket. Penerimaan Pensiun </a></li>
                        <li><a href="{{ route('Uskmeninggaldunia.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Ket. Orang Meninggal </a></li>
                        <li><a href="{{ route('Uskijinsekolah.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Ket. Ijin Sekolah </a></li>
                        <li><a href="{{ route('Usppindahtempat.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Pernyataan Pindah Tempat Tinggal </a></li>
                        <li><a href="{{ route('Uspkelahiran.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Pernyataan Kelahiran </a></li>
                        <li><a href="{{ route('Uspkematian.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Pernyataan Kematian </a></li>
                        <li><a href="{{ route('Uspahliwaris.index') }}"><i class="fa fa-pencil-square-o"></i>Srt. Pernyataan Ahli Waris </a></li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu">Surat Pengajuan Cerai Rujuk</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('Uspcerairujuk1.index') }}">Srt. Pengajuan Cerai Rujuk 1 </a></li>
                                <li><a href="{{ route('Uspcerairujuk2.index') }}">Srt. Pengajuan Cerai Rujuk 2 </a></li>
                                <li><a href="{{ route('Uspcerairujuk3.index') }}">Srt. Pengajuan Cerai Rujuk 3 </a></li>
                                <li><a href="{{ route('Uspcerairujuk4.index') }}">Srt. Pengajuan Cerai Rujuk 4 </a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-folder"></i><span class="hide-menu">Surat Ket. Tidak Mampu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('Usktidakmampu1.index') }}">Srt. Ket. Tidak Mampu 1 </a></li>
                                <li><a href="{{ route('Usktidakmampu2.index') }}">Srt. Ket. Tidak Mampu 2 </a></li>
                                <li><a href="{{ route('Usktidakmampu3.index') }}">Srt. Ket. Tidak Mampu 3 </a></li>
                            </ul>
                        </li>
                   </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pernyataan Pindah Tempat</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                        <li class="breadcrumb-item active">Data Pernyataan Pindah Tempat</li>
                    </ol>
                </div>
            </div>
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
		<form method="post" action="{{action('UsppindahtempatController@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama :</label>
					<input type="text" class="form-control" name="nama" value="{{$Usppindahtempat->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Tempat Tanggal Lahir :</label>
					<input type="text" class="form-control" name="ttl" value="{{$Usppindahtempat->ttl}}">
				</div>
			</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Nik :</label>
        <input type="text" class="form-control" name="nik" value="{{$Usppindahtempat->nik}}">
      </div>
    </div>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="name">Alamat Asal :</label>
      <input type="text" class="form-control" name="alamat_asal" value="{{$Usppindahtempat->alamat_asal}}">
    </div>
  </div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Desa/Kelurahan :</label>
    <input type="text" class="form-control" name="desa_kelurahan" value="{{$Usppindahtempat->desa_kelurahan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Kabupaten/Kota :</label>
    <input type="text" class="form-control" name="kabupaten_kota" value="{{$Usppindahtempat->kabupaten_kota}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Provinsi :</label>
    <input type="text" class="form-control" name="provinsi" value="{{$Usppindahtempat->provinsi}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Desa/Kelurahan/Rt/Rw :</label>
    <input type="text" class="form-control" name="desa_kelurahan_rt_rw_tujuan" value="{{$Usppindahtempat->desa_kelurahan_rt_rw_tujuan}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Kecamatan :</label>
    <input type="text" class="form-control" name="kecamatan" value="{{$Usppindahtempat->kecamatan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Kabupaten/Kota Tujuan :</label>
    <input type="text" class="form-control" name="kabupaten_kota_tujuan" value="{{$Usppindahtempat->kabupaten_kota_tujuan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Provinsi Tujuan :</label>
    <input type="text" class="form-control" name="provinsi_tujuan" value="{{$Usppindahtempat->provinsi_tujuan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alasan Pindah :</label>
    <input type="text" class="form-control" name="alasan_pindah" value="{{$Usppindahtempat->alasan_pindah}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nik Orang Pertama :</label>
    <input type="text" class="form-control" name="nik_1" value="{{$Usppindahtempat->nik_1}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Orang Pertama :</label>
    <input type="text" class="form-control" name="nama_1" value="{{$Usppindahtempat->nama_1}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Lahir Orang Pertama :</label>
    <input type="date" class="form-control" name="tgl_lahir_1" value="{{$Usppindahtempat->tgl_lahir_1}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Hubungan Keluarga Orang Pertama :</label>
    <input type="text" class="form-control" name="hubungan_keluarga_1" value="{{$Usppindahtempat->hubungan_keluarga_1}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nik Orang Kedua :</label>
    <input type="text" class="form-control" name="nik_2" value="{{$Usppindahtempat->nik_2}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Orang Kedua :</label>
    <input type="text" class="form-control" name="nama_2" value="{{$Usppindahtempat->nama_2}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Lahir Orang Kedua :</label>
    <input type="date" class="form-control" name="tgl_lahir_2" value="{{$Usppindahtempat->tgl_lahir_2}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Hubungan Keluarga Orang Kedua :</label>
    <input type="text" class="form-control" name="hubungan_keluarga_2" value="{{$Usppindahtempat->hubungan_keluarga_2}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Hari ini :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Usppindahtempat->tgl_hari_ini}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Pemohon :</label>
    <input type="text" class="form-control" name="nama_pemohon" value="{{$Usppindahtempat->nama_pemohon}}" onkeyup="this.value = this.value.toUpperCase();">
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
	<!-- All Jquery -->
	<script src="{{asset('assets/Adminhome/js/lib/jquery/jquery.min.js')}}"></script>
	<!-- Bootstrap tether Core JavaScript -->
	<script src="{{asset('assets/Adminhome/js/lib/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- slimscrollbar scrollbar JavaScript -->
	<script src="{{asset('assets/Adminhome/js/jquery.slimscroll.js')}}"></script>
	<!--Menu sidebar -->
	<script src="{{asset('assets/Adminhome/js/sidebarmenu.js')}}"></script>
	<!--stickey kit -->
	<script src="{{asset('assets/Adminhome/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
	<!--Custom JavaScript -->
	<!-- Amchart -->
	<script src="{{asset('assets/Adminhome/js/lib/morris-chart/raphael-min.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/lib/morris-chart/morris.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/lib/morris-chart/dashboard1-init.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/lib/calendar-2/moment.latest.min.js')}}"></script>
	<!-- scripit init-->
	<script src="{{asset('assets/Adminhome/js/lib/calendar-2/semantic.ui.min.js')}}"></script>
	<!-- scripit init-->
	<script src="{{asset('assets/Adminhome/js/lib/calendar-2/prism.min.js')}}"></script>
	<!-- scripit init-->
	<script src="{{asset('assets/Adminhome/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
	<!-- scripit init-->
	<script src="{{asset('assets/Adminhome/js/lib/calendar-2/pignose.init.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
	<script src="{{asset('assets/Adminhome/js/scripts.js')}}"></script>
	<!-- scripit init-->
	<script src="{{asset('assets/Adminhome/js/scripts.js')}}"></script>
</body>
</html>
