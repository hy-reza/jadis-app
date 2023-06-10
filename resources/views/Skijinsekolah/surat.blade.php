<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Skijinsekolah as $Skijinsekolah)
    <table align="center">
      <tr>
      <td><img src="{{asset('assets/Adminhome/images/logo-hitam.png')}}" width="87" height="87"></td>
      <td><center>
        <font size="4"><b>PEMERINTAH KOTA BATU<b></font><br>
        <font size="6"><b>KECAMATAN JUNREJO</b></font><br>
        <font size="6"><b>DESA JUNREJO</b></font><br>
        <font size="2"><b><u>Jln. Raya Desa Junrejo No. 577 Kode Pos 65191</u></b></font><br>
      </td>
    </tr>
    <tr>
      <td colspan="2"><hr></td>
    </tr>
    </table>

    <table align="center">
      <tr>
        <td height="10"></td>
      </tr>
      <tr>
      <td><center>
        <font size="4"><b>SURAT KETERANGAN IJIN SEKOLAH<b></font><br>Nomor :  471/   <b>426<b>    /35.07.31.2006/2019
      </td>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Junrejo Kecamatan Junrejo Kota Batu Propinsi Jawa Timur. Menerangkan dengan sebenarnya bahwa :
        </td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama lengkap</td>
        <td width="430"> : {{$Skijinsekolah['nama_lengkap']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td width="430"> : {{$Skijinsekolah['kelas']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Nama Sekolah</td>
        <td width="430"> : {{$Skijinsekolah['nama_sekolah']}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dalam rangka memperingati Hari Kemerdekaan Republik Indonesia yang ke {{$Skijinsekolah['nomer_kemerdekaan']}} Tahun {{$Skijinsekolah['tahun_kemerdekaan']}} yang diselenggarakan pada Hari {{$Skijinsekolah['hari']}} Tanggal {{$Skijinsekolah['tgl']}}, dimohon dengan hormat yang bersangkutan tersebut diatas untuk diberikan ijin mengikuti kegiatan Karnafal diwilayah (kampung) mereka masing – masing dan tidak dapat mengikuti kegiatan di sekolah.
        </td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dapat maklum adanya.</td>
      </tr>
      <table  align="center"  width="600" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo,{{$Skijinsekolah['tgl_hari_ini']}}</center></td>
        </tr>
        <tr>
          <td><center></center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center> <u></u></center></td>
          <td></td>
          <td><center> <u> <b>{{$Skijinsekolah['nama_kades']}}<b> </u></center></td>
        </tr>
        @endforeach
      </table>

  </body>
</html>
