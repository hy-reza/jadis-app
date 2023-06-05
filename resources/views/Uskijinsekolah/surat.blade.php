<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uskijinsekolah as $Uskijinsekolah)
    <table align="center">
      <tr>
      <td><img src="{{asset('assets/Adminhome/images/hitam.png')}}" width="87" height="87"></td>
      <td><center>
        <font size="4"><b>PEMERINTAH KABUPATEN MALANG<b></font><br>
        <font size="6"><b>KECAMATAN KROMENGAN</b></font><br>
        <font size="6"><b>DESA JAMBUWER</b></font><br>
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
        <font size="4"><b>SURAT KETERANGAN IJIN SEKOLAH<b></font><br><b>Nomor :  {{$Uskijinsekolah->nomer_surat}}</b>
      </td>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Junrejo Kecamatan Junrejo Kabupaten Malang Propinsi Jawa Timur. Menerangkan dengan sebenarnya bahwa :
        </td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama lengkap</td>
        <td width="430"> : {{$Uskijinsekolah->nama_lengkap}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td width="430"> : {{$Uskijinsekolah->kelas}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Nama Sekolah</td>
        <td width="430"> : {{$Uskijinsekolah->nama_sekolah}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dalam rangka memperingati Hari Kemerdekaan Republik Indonesia yang ke {{$Uskijinsekolah->nomer_kemerdekaan}} Tahun {{$Uskijinsekolah->tahun_kemerdekaan}} yang diselenggarakan pada Hari {{$Uskijinsekolah->hari}} Tanggal {{$Uskijinsekolah->tgl}}, dimohon dengan hormat yang bersangkutan tersebut diatas untuk diberikan ijin mengikuti kegiatan Karnafal diwilayah (kampung) mereka masing – masing dan tidak dapat mengikuti kegiatan di sekolah.
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
          <td width="270"><center>Junrejo,{{$Uskijinsekolah->tgl_hari_ini}}</center></td>
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
          <td><center> <u> <b>{{$Uskijinsekolah->nama_kades}}<b> </u></center></td>
        </tr>
        @endforeach
      </table>

  </body>
</html>
