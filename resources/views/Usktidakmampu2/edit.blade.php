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
                <div class="navbar-header my-1">
                    <a class="navbar-brand" href="/home">
                        <!-- Logo icon -->
                        <b><img src="{{ asset('assets/home/img/logo_batu.png') }}" " width="40"
                                        alt="" class="mr-2">Dashboard</b>
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
                    <h3 class="text-primary">Data Keterangan Tidak Mampu 2</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                        <li class="breadcrumb-item active">Data Ket. Tidak Mampu</li>
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
		<form method="post" action="{{action('Usktidakmampu2Controller@update', $id)}}">
			@csrf
			<input name="_method" type="hidden" value="PATCH">
      </div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nomer Surat :</label>
					<input type="text" class="form-control" name="nomer_surat" value="{{$Usktidakmampu2->nomer_surat}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Nama Lengkap :</label>
					<input type="text" class="form-control" name="nama" value="{{$Usktidakmampu2->nama}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
					<label for="name">Jenis Kelamin :</label>
					<input type="text" class="form-control" name="jenis_kelamin" value="{{$Usktidakmampu2->jenis_kelamin}}" onkeyup="this.value = this.value.toUpperCase();">
				</div>
			</div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Tempat, Tanggal Lahir :</label>
        <input type="text" class="form-control" name="ttl" value="{{$Usktidakmampu2->ttl}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="name">Agama :</label>
        <input type="text" class="form-control" name="agama" value="{{$Usktidakmampu2->agama}}" onkeyup="this.value = this.value.toUpperCase();">
      </div>
    </div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Status :</label>
    <input type="text" class="form-control" name="status" value="{{$Usktidakmampu2->status}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Pekerjaan :</label>
    <input type="text" class="form-control" name="pekerjaan" value="{{$Usktidakmampu2->pekerjaan}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Alamat :</label>
    <input type="text" class="form-control" name="alamat" value="{{$Usktidakmampu2->alamat}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tempat Pelayanan Pengobatan :</label>
    <input type="text" class="form-control" name="tempat_pengobatan" value="{{$Usktidakmampu2->tempat_pengobatan}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Penyakit yang diderita :</label>
    <input type="text" class="form-control" name="sakit" value="{{$Usktidakmampu2->sakit}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tahun :</label>
    <input type="year" class="form-control" name="tahun" value="{{$Usktidakmampu2->tahun}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nomer Urut :</label>
    <input type="text" class="form-control" name="no_urut" value="{{$Usktidakmampu2->no_urut}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Tanggal Pembuatan Surat :</label>
    <input type="date" class="form-control" name="tgl_hari_ini" value="{{$Usktidakmampu2->tgl_hari_ini}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Yang Berkepentingan :</label>
    <input type="text" class="form-control" name="nama_berkepentingan" value="{{$Usktidakmampu2->nama_berkepentingan}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Kepala Desa :</label>
    <input type="text" class="form-control" name="nama_kades" value="{{$Usktidakmampu2->nama_kades}}" onkeyup="this.value = this.value.toUpperCase();">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">No :</label>
    <input type="text" class="form-control" name="no" value="{{$Usktidakmampu2->no}}">
  </div>
</div>
<div class="row">
  <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="name">Nama Camat :</label>
    <input type="text" class="form-control" name="nama_camat" value="{{$Usktidakmampu2->nama_camat}}" onkeyup="this.value = this.value.toUpperCase();">
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
