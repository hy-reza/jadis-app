<!DOCTYPE html>
<html lang="en">

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
                    <h3 class="text-primary">Data Surat Pernyataan Ahli Waris</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
                        <li class="breadcrumb-item active">Data Surat Pernyataan Ahli Waris</li>
                    </ol>
                </div>
            </div>
            <!-- <div class="col" align="center">
                <p>
                  <h1 class="text"><br><br><br><br><br>Anda login sebagai Administrator</h1>
                </p>
            </div> -->
						<body>
              <div class="container">
								<h2>Input Data Pernyataan Ahli Waris</h2>
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
								<form method="post" action="{{url('Uspahliwaris')}}">
								@csrf
                <h2>Nomer Surat</h2>
                <div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
                    <input type="text" class="form-control" name="nomer_surat" placeholder="nomer surat">
									</div>
								</div>

                <h4 align="center">Nama Almarhum</h4>

								<div class="row">
									<div class="col-md-4"></div>
									<div class="form-group col-md-4">
                    <input type="text" class="form-control" name="nama_alm" placeholder="nama lengkap Almarhum" onkeyup="this.value = this.value.toUpperCase();">
									</div>
								</div>

              <h4 align="center">Akte Kematian No. </h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="nomer_akte_kematian" placeholder="nomer akte kematian">
                </div>
              </div>

              <h4 align="center">Pada Hari</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="hari" placeholder="hari" onkeyup="this.value = this.value.toUpperCase();">
                </div>
              </div>

              <h4 align="center">Tanggal </h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="tanggal" placeholder="tanggal">
                </div>
              </div>

              <h4 align="center">Bulan</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="bulan" placeholder="bulan" onkeyup="this.value = this.value.toUpperCase();">
                </div>
              </div>

              <h4 align="center">tahun</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="year" class="form-control" name="tahun" placeholder="tahun">
                </div>
              </div>

              <h4 align="center">Suaminya/Istrinya</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="status_suami_istri" placeholder="suaminya/istrinya">
                </div>
              </div>

              <h4 align="center">Nama Suami/Istri</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="nama_suami_istri" placeholder="nama_suami_istri" onkeyup="this.value = this.value.toUpperCase();">
                </div>
              </div>

              <h4 align="center">Nama Anak</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="nama_anak" placeholder="nama_anak" onkeyup="this.value = this.value.toUpperCase();">
                </div>
              </div>

              <h4 align="center">Umur Anak</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="umur_anak" placeholder="umur_anak">
                </div>
              </div>

              <h4 align="center">Pekerjaan Anak</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="pekerjaan_anak" placeholder="pekerjaan_anak">
                </div>
              </div>

              <h4 align="center">alamat_anak</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="alamat_anak" placeholder="alamat_anak">
                </div>
              </div>

              <h4 align="center">Nomer Req</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="no_req" placeholder="no_req">
                </div>
              </div>

              <h4 align="center">Tanggal Pembuatan Surat</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="date" class="form-control" name="tgl_hari_ini" placeholder="tgl_hari_ini">
                </div>
              </div>

              <h4 align="center">Nama Camat</h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="nama_camat" placeholder="nama_camat" onkeyup="this.value = this.value.toUpperCase();">
                </div>
              </div>

              <h4 align="center">Nama Kepala Desa </h4>

              <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" name="nama_kades" placeholder="kepala desa" onkeyup="this.value = this.value.toUpperCase();">
                </div>
              </div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="form-group col-md-4">
									<button type="submit" class="btn btn-success" style="margin-left: 38px">Tambah</button>
								</div>
							</div>
						</form>


            <!-- End Bread crumb -->
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
