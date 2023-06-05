<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('awal');
});

Auth::routes();

//route Admin
Route::resource('v1', 'DataController');
Route::resource('matkul', 'MatkulController');
Route::resource('jurusan', 'JurusanController');
Route::resource('kelas', 'KelasController');
Route::resource('rw', 'RwController');
Route::resource('rt', 'RtController');
Route::resource('datapenduduk', 'DatapendudukController');
Route::resource('Skumum', 'SkumumController');
Route::resource('Sppindahtempat', 'SppindahtempatController');
Route::resource('Spkematian', 'SpkematianController');
Route::resource('Spkelahiran', 'SpkelahiranController');
Route::resource('Spcerairujuk1', 'Spcerairujuk1Controller');
Route::resource('Spcerairujuk2', 'Spcerairujuk2Controller');
Route::resource('Spcerairujuk3', 'Spcerairujuk3Controller');
Route::resource('Spcerairujuk4', 'Spcerairujuk4Controller');
Route::resource('Sktidakmampu1', 'Sktidakmampu1Controller');
Route::resource('Sktidakmampu2', 'Sktidakmampu2Controller');
Route::resource('Sktidakmampu3', 'Sktidakmampu3Controller');
Route::resource('Skijinsekolah', 'SkijinsekolahController');
Route::resource('Skpenerimaanpensiun', 'SkpenerimaanpensiunController');
Route::resource('Skjualbelitanah', 'SkjualbelitanahController');
Route::resource('Spahliwaris', 'SpahliwarisController');
Route::resource('Skmeninggaldunia', 'SkmeninggalduniaController');


//route Pencarian Admin
Route::get('/search', 'DatapendudukController@search')->name('datapenduduk.search');
Route::get('/searchrt', 'RtController@search')->name('rt.search');
Route::get('/searchrw', 'RwController@search')->name('rw.search');
Route::get('/searchSkijinsekolah', 'SkijinsekolahController@search')->name('Skijinsekolah.search');
Route::get('/searchSkjualbelitanah', 'SkjualbelitanahController@search')->name('Skjualbelitanah.search');
Route::get('/searchSkmeninggaldunia', 'SkmeninggalduniaController@search')->name('Skmeninggaldunia.search');
Route::get('/searchSkpenerimaanpensiun', 'SkpenerimaanpensiunController@search')->name('Skpenerimaanpensiun.search');
Route::get('/searchSktidakmampu1', 'Sktidakmampu1Controller@search')->name('Sktidakmampu1.search');
Route::get('/searchSktidakmampu2', 'Sktidakmampu2Controller@search')->name('Sktidakmampu2.search');
Route::get('/searchSktidakmampu3', 'Sktidakmampu3Controller@search')->name('Sktidakmampu3.search');
Route::get('/searchSpahliwaris', 'SpahliwarisController@search')->name('Spahliwaris.search');
Route::get('/searchSpcerairujuk1', 'Spcerairujuk1Controller@search')->name('Spcerairujuk1.search');
Route::get('/searchSpcerairujuk2', 'Spcerairujuk2Controller@search')->name('Spcerairujuk2.search');
Route::get('/searchSpcerairujuk3', 'Spcerairujuk3Controller@search')->name('Spcerairujuk3.search');
Route::get('/searchSpcerairujuk4', 'Spcerairujuk4Controller@search')->name('Spcerairujuk4.search');
Route::get('/searchSpkelahiran', 'SpkelahiranController@search')->name('Spkelahiran.search');
Route::get('/searchSpkematian', 'SpkematianController@search')->name('Spkematian.search');
Route::get('/searchSppindahtempat', 'SppindahtempatController@search')->name('Sppindahtempat.search');

//route Pencarian User
Route::get('/searchUdatapenduduk', 'UdatapendudukController@search')->name('Udatapenduduk.search');
Route::get('/searchUrt', 'UrtController@search')->name('Urt.search');
Route::get('/searchUwt', 'UrwController@search')->name('Urw.search');
Route::get('/searchUskijinsekolah', 'UskijinsekolahController@search')->name('Uskijinsekolah.search');
Route::get('/searchUskjualbelitanah', 'UskjualbelitanahController@search')->name('Uskjualbelitanah.search');
Route::get('/searchUskmeninggaldunia', 'UskmeninggalduniaController@search')->name('Uskmeninggaldunia.search');
Route::get('/searchUskpenerimaanpensiun', 'UskpenerimaanpensiunController@search')->name('Uskpenerimaanpensiun.search');
Route::get('/searchUsktidakmampu1', 'Usktidakmampu1Controller@search')->name('Usktidakmampu1.search');
Route::get('/searchUsktidakmampu2', 'Usktidakmampu2Controller@search')->name('Usktidakmampu2.search');
Route::get('/searchUsktidakmampu3', 'Usktidakmampu3Controller@search')->name('Usktidakmampu3.search');
Route::get('/searchUspahliwaris', 'UspahliwarisController@search')->name('Uspahliwaris.search');
Route::get('/searchUspcerairujuk1', 'Uspcerairujuk1Controller@search')->name('Uspcerairujuk1.search');
Route::get('/searchUspcerairujuk2', 'Uspcerairujuk2Controller@search')->name('Uspcerairujuk2.search');
Route::get('/searchUspcerairujuk3', 'Uspcerairujuk3Controller@search')->name('Uspcerairujuk3.search');
Route::get('/searchUspcerairujuk4', 'Uspcerairujuk4Controller@search')->name('Uspcerairujuk4.search');
Route::get('/searchUspkelahiran', 'UspkelahiranController@search')->name('Uspkelahiran.search');
Route::get('/searchUspkematian', 'UspkematianController@search')->name('Uspkematian.search');
Route::get('/searchUsppindahtempat', 'UsppindahtempatController@search')->name('Usppindahtempat.search');


//route User
Route::resource('Uberanda', 'UberandaController');
Route::resource('Ujadwal', 'UjadwalController');
Route::resource('Ubiodata', 'UbiodataController');
Route::resource('Ukrs', 'UkrsController');
Route::resource('Urt', 'UrtController');
Route::resource('Urw', 'UrwController');
Route::resource('Uskijinsekolah', 'UskijinsekolahController');
Route::resource('Udatapenduduk', 'UdatapendudukController');
Route::resource('Uskjualbelitanah', 'UskjualbelitanahController');
Route::resource('Uskmeninggaldunia', 'UskmeninggalduniaController');
Route::resource('Uskpenerimaanpensiun', 'UskpenerimaanpensiunController');
Route::resource('Usktidakmampu1', 'Usktidakmampu1Controller');
Route::resource('Usktidakmampu2', 'Usktidakmampu2Controller');
Route::resource('Usktidakmampu3', 'Usktidakmampu3Controller');
Route::resource('Uspahliwaris', 'UspahliwarisController');
Route::resource('Uspcerairujuk1', 'Uspcerairujuk1Controller');
Route::resource('Uspcerairujuk2', 'Uspcerairujuk2Controller');
Route::resource('Uspcerairujuk3', 'Uspcerairujuk3Controller');
Route::resource('Uspcerairujuk4', 'Uspcerairujuk4Controller');
Route::resource('Uspkelahiran', 'UspkelahiranController');
Route::resource('Uspkematian', 'UspkematianController');
Route::resource('Usppindahtempat', 'UsppindahtempatController');

Route::get('/home', 'HomeController@index');
Route::get('/user/logout','Auth\LoginController@userlogout')->name('user.logout');

Route::prefix('admin')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});
