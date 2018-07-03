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
                                <i class="fas fa-tachometer-alt"></i>BERANDA</a>
                        </li>
                        <li>
                            <a href="{{route ('Ujadwal.index')}}">
                                <i class="fas fa-chart-bar"></i>JADWAL KULIAH</a>
                        </li>
                        <li>
                            <a href="{{route ('Ubiodata.index')}}">
                                <i class="fas fa-table"></i>BIODATA</a>
                        </li>
                        <li>
                            <a href="{{route ('Ukrs.index')}}">
                                <i class="far fa-check-square"></i>KRS</a>
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
            <div class="container">
                                <h2>Input Data Mahasiswa</h2>
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
                                <form method="post" action="{{url('Ukrs')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control" name="Ukrs" placeholder="Ukrs">
                                    </div>
                                </div>
                            </div>
                            <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <table style="width: 300px" id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Semester</th>
                                            <th>Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th width="900px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>I</td>
                                            <td>Pengembangan Kepribadian</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>I</td>
                                            <td>Olahraga</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>I</td>
                                            <td>Logika Informatika</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>I</td>
                                            <td>Pemrograman Terstruktur</td>
                                            <td>4</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>I</td>
                                            <td>pengantar Teknologi Informasi</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>I</td>
                                            <td>Kalkulus dan Geometri</td>
                                            <td>4</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>I</td>
                                            <td>Bahasa Inggris Teknik I</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>I</td>
                                            <td>Al-Islam dan Kemuhammadiyahan I</td>
                                            <td>1</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>II</td>
                                            <td>Interaksi Manusia dan Komputer</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>II</td>
                                            <td>Organisasi dan Arsitektur Komputer</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>II</td>
                                            <td>Pengantar Topologi</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>II</td>
                                            <td>Pemrograman Objek dengan Java</td>
                                            <td>4</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>II</td>
                                            <td>Matematika Diskrit</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>II</td>
                                            <td>Aljabar Linear dan Matriks</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>II</td>
                                            <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>II</td>
                                            <td>Bahasa Inggris Teknik II</td>
                                            <td>2</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>II</td>
                                            <td>Al Islam dan Kemuhammadiyahan II</td>
                                            <td>1</td>
                                            <td>
                                                <a href="{{route ('Ukrs.index')}}" class="btn btn-primary btn-sm">pilih</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </form>
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
