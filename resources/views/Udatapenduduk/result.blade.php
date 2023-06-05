<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Kartu Rencana Studi</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('assets/Userhome/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{asset('assets/Userhome/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{asset('assets/Userhome/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/Userhome/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('assets/Userhome/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/home">
                    <img src="{{asset('assets/Userhome/images/icon/KRS.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{route ('Uberanda.index')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route ('Udatapenduduk.index')}}">
                                <i class="fas fa-chart-bar"></i>Data Penduduk</a>
                        </li>
                        <li>
                            <a href="{{route ('Ubiodata.index')}}">
                                <i class="fas fa-table"></i>Data RT</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="fas fa-table"></i>Data RW</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pernyataan Ahli Waris</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Keterangan Jual Beli Tanah</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Keterangan Penerimaan Pensiun</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Keterangan Orang Meninggal</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Keterangan Ijin Sekolah</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pernyataan Pindah Tempat Tinggal</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pernyataan Kelahiran</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pernyataan Kematian</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pengajuan Cerai Rujuk 1</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pengajuan Cerai Rujuk 2</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pengajuan Cerai Rujuk 3</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Pengajuan Cerai Rujuk 4</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Ket. Tidak Mampu 1</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Ket. Tidak Mampu 2</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>Surat Ket. Tidak Mampu 3</a>
                        </li>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a>{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Penduduk</h2>
                    </div>
                </div>
            </div>

            @if(count($result))
            <div class="container">
              <div class="alert alert-success">Data Yang Anda Cari {{$search}}</div>
            </div>
            
            <div class="container">
              <form action="{{ route('Udatapenduduk.search')}}" method="get">
                <input type="text" name="nik" class="form-control" placeholder="Search..." style="width: 80%; display: inline;">
                <button type="submit" class="btn btn-primary">Cari</button>
              </form>
            </div>


            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <table style="width: 100px" id="datatable" class="table table-striped table-bordered">
                            <tr>
                                <td>
                                    <a href="{{route ('Udatapenduduk.create')}}" class="btn btn-primary btn-sm">Tambah Data Penduduk</a>
                                </td>
                            </tr>
                    </table>
                    </div>
                </div>
					 <div class="container">
								<br />
								@if (\Session::has('success'))
								<div class="alert alert-success">
									<p>{{ \Session::get('success') }}</p>
								</div><br />
								@endif
								<table class="table table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>NIK</th>
											<th>NAMA</th>
                      <th>JENIS KELAMIN</th>
                      <th>TEMPAT TTL</th>
                      <th>TGL LAHIR</th>
                      <th>AGAMA</th>
                      <th>STATUS</th>
                      <th>PENDIDIKAN TERAKHIR</th>
                      <th>PEKERJAAN</th>
                      <th>Edit</th>
											<th colspan="2">Hapus</th>
										</tr>
									</thead>
									<tbody>
										@foreach($result as $Udatapenduduk)
										<tr>
											<td>{{$Udatapenduduk['id']}}</td>
											<td>{{$Udatapenduduk['nik']}}</td>
											<td>{{$Udatapenduduk['nama']}}</td>
                      <td>{{$Udatapenduduk['jenis_kelamin']}}</td>
                      <td>{{$Udatapenduduk['tempat_ttl']}}</td>
                      <td>{{$Udatapenduduk['tgl_lahir']}}</td>
                      <td>{{$Udatapenduduk['agama']}}</td>
                      <td>{{$Udatapenduduk['status']}}</td>
                      <td>{{$Udatapenduduk['pendidikan_terakhir']}}</td>
                      <td>{{$Udatapenduduk['pekerjaan']}}</td>
											<td><a href="{{action('UdatapendudukController@edit', $Udatapenduduk['id'])}}" class="btn btn-warning">Ubah</a></td>
											<td>
												<form action="{{action('UdatapendudukController@destroy', $Udatapenduduk['id'])}}" method="post">
													@csrf
													<input type="hidden" name="_method" value="DELETE">
													<button class="btn btn-danger" type="submit">Hapus</button>
												</form>
											</td>
										</tr>
										@endforeach
									</tbody>
                  @else
                  <h1>Data Tidak Ditemukan</h1>
                  @endif
								</table>
							</div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('assets/Userhome/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('assets/Userhome/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/Userhome/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('assets/Userhome/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('assets/Userhome/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/Userhome/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('assets/Userhome/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('assets/Userhome/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/Userhome/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('assets/Userhome/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/Userhome/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('assets/Userhome/vendor/select2/select2.min.js')}}">
    </script>
    <!-- Main JS-->
    <script src="{{asset('assets/Userhome/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
