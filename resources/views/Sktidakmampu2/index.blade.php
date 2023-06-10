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
                                        alt="" class="mr-2">Dashboard Admin</b>
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

                        <li><a href="/admin"><i class="fa fa-tachometer"></i>Dashboard </a></li>

                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>Register User </a></li>

                        <li><a href="{{route ('datapenduduk.index')}}"><i class="fa fa-group"></i>Data Penduduk</a></li>

                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user-secret"></i><span class="hide-menu">Master</span></a>
                            <ul aria-expanded="false" class="collapse">
                              <li><a href="{{route ('rw.index')}}">Data RW</a></li>
                              <li><a href="{{route ('rt.index')}}">Data RT</a></li>
                            </ul>
                        </li>
                              <li><a href="{{ route('Skjualbelitanah.index') }}"><i class="fa fa-pencil-square-o"></i>Data Keterangan Jual Beli Tanah </a></li>
                              <li><a href="{{ route('Skpenerimaanpensiun.index') }}"><i class="fa fa-pencil-square-o"></i>Data Keterangan Penerimaan Pensiun </a></li>
                              <li><a href="{{route ('Spkematian.index')}}"><i class="fa fa-pencil-square-o"></i>Data Pernyataan Kematian</a></li>
                              <li><a href="{{ route('Skmeninggaldunia.index') }}"><i class="fa fa-pencil-square-o"></i>Data Keterangan Meninggal Dunia </a></li>
                              <li><a href="{{ route('Skijinsekolah.index') }}"><i class="fa fa-pencil-square-o"></i>Data Keterangan Ijin Sekolah </a></li>
                              <li><a href="{{ route('Sppindahtempat.index') }}"><i class="fa fa-pencil-square-o"></i>Data Pernyataan Permohonan Pindah Tempat </a></li>
                              <li><a href="{{ route('Spkelahiran.index') }}"><i class="fa fa-pencil-square-o"></i>Data Pernyataan Kelahiran </a></li>
                              <li><a href="{{ route('Spkematian.index') }}"><i class="fa fa-pencil-square-o"></i>Data Pernyataan Kematian </a></li>
                              <li><a href="{{ route('Spahliwaris.index') }}"><i class="fa fa-pencil-square-o"></i>Data Pernyataan Ahli Waris </a></li>
                              <li><a href="{{route ('Spcerairujuk1.index')}}"><i class="fa fa-pencil-square-o"></i>Data Pengajuan cerai rujuk 1</a></li>
                              <li><a href="{{route ('Spcerairujuk2.index')}}"><i class="fa fa-pencil-square-o"></i>Data Pengajuan cerai rujuk 2</a></li>
                              <li><a href="{{route ('Spcerairujuk3.index')}}"><i class="fa fa-pencil-square-o"></i>Data Pengajuan cerai rujuk 3</a></li>
                              <li><a href="{{route ('Spcerairujuk4.index')}}"><i class="fa fa-pencil-square-o"></i>Data Pengajuan cerai rujuk 4</a></li>
                              <li><a href="{{ route('Sktidakmampu1.index') }}"><i class="fa fa-pencil-square-o"></i>Data Ket. Tidak Mampu 1 </a></li>
                              <li><a href="{{ route('Sktidakmampu2.index') }}"><i class="fa fa-pencil-square-o"></i>Data Ket. Tidak Mampu 2 </a></li>
                              <li><a href="{{ route('Sktidakmampu3.index') }}"><i class="fa fa-pencil-square-o"></i>Data Ket. Tidak Mampu 3 </a></li>




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
            <!-- <div class="col" align="center">
                <p>
                  <h1 class="text"><br><br><br><br><br>Anda login sebagai Administrator</h1>
                </p>
            </div> -->
            <div class="container">
              <form action="{{ route('Sktidakmampu2.search')}}" method="get">
                <input type="text" name="nama" class="form-control" placeholder="Search..." style="width: 80%; display: inline;">
                <button type="submit" class="btn btn-primary">Cari</button>
              </form>
            </div>

            <div class="row m-t-25">
                <div class="col-sm-5 col-lg-3">
                    </div>
                </div>
								<table class="table table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nama</th>
											<th>Jenis Kelamin</th>
                      <th>Tempat, Tgl Lhr</th>
                      <th>Agama</th>
                      <th>Status</th>
                      <th>Pekerjaan</th>
                      <th>Alamat</th>
                      <th>Tmpt Pengobatan</th>
                      <th>Sakit</th>
                      <th>Tahun</th>
                      <th>No Urut</th>
                      <th>TGL Pembuatan Surat</th>
                      <th>Nama yg Berkepentingan</th>
                      <th>Nama Kepala Desa</th>
                      <th>No</th>
                      <th>Nama Camat</th>
										</tr>
									</thead>
									<tbody>
										@foreach($Usktidakmampu2 as $Usktidakmampu2)
										<tr>
											<td>{{$Usktidakmampu2['id']}}</td>
											<td>{{$Usktidakmampu2['nama']}}</td>
											<td>{{$Usktidakmampu2['jenis_kelamin']}}</td>
                      <td>{{$Usktidakmampu2['ttl']}}</td>
                      <td>{{$Usktidakmampu2['agama']}}</td>
                      <td>{{$Usktidakmampu2['status']}}</td>
                      <td>{{$Usktidakmampu2['pekerjaan']}}</td>
                      <td>{{$Usktidakmampu2['alamat']}}</td>
                      <td>{{$Usktidakmampu2['tempat_pengobatan']}}</td>
                      <td>{{$Usktidakmampu2['sakit']}}</td>
                      <td>{{$Usktidakmampu2['tahun']}}</td>
                      <td>{{$Usktidakmampu2['no_urut']}}</td>
                      <td>{{$Usktidakmampu2['tgl_hari_ini']}}</td>
                      <td>{{$Usktidakmampu2['nama_berkepentingan']}}</td>
                      <td>{{$Usktidakmampu2['nama_kades']}}</td>
                      <td>{{$Usktidakmampu2['no']}}</td>
                      <td>{{$Usktidakmampu2['nama_camat']}}</td>
													@csrf
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>

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
