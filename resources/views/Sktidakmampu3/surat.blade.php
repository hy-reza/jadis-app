<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Sktidakmampu3 as $Sktidakmampu3)
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
    </table>
    <table align="center" width="600" >
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <td width="375"></td>
      <td >Junrejo, {{$Sktidakmampu3['tgl_hari_ini']}}</td>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
    </table>
    <table align="center" width="600" >
      <tr>
        <td width="30">Nomor</td>
        <td width="170">: 440/         /35.07.31.2006/2010.</td>
        <td width="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepada</td>
      </tr>
      <tr>
        <td>Sifat</td>
        <td>: Penting.</td>
        <td>Yth. <b>KAPOLSEK JUNREJO<b></td>
      </tr>
      <tr>
        <td>Lampiran</td>
        <td>: 1 (satu berkas).</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;di</td>
      </tr>
      <tr>
        <td>Perihal</td>
        <td>: Pengajuan Daftar Tambahan Warga Miskin.</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JUNREJO </td>
      </tr>
      <tr>
        <td height="30" colspan="2"></td>
      </tr>
    </table>

    <table align="center" width="550" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bersama ini kami Kepala Desa Junrejo Kecamatan Junrejo Kota Batu menerangkan dengan sebenarnya bahwa seseorang :
        </td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama lengkap</td>
        <td width="400"> : {{$Sktidakmampu3['nama']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Jenis kelamin</td>
        <td width="400"> : {{$Sktidakmampu3['jenis_kelamin']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat, Tgl lahir</td>
        <td width="400"> : {{$Sktidakmampu3['ttl']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>A g a m a </td>
        <td width="400"> : {{$Sktidakmampu3['agama']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Status </td>
        <td width="400"> : {{$Sktidakmampu3['status']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="400"> : {{$Sktidakmampu3['pekerjaan']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="400"> : {{$Sktidakmampu3['alamat']}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bersangkutan tersebut diatas benar-benar warga Desa Junrejo Kecamatan Junrejo Kota Batu yang mana yang bersangkutan tersebut juga warga yang tergolong mikin, maka kami mohon dengan hormat untuk dapat dimasukan dalam Daftar Penduduk Miskin Tahun {{$Sktidakmampu3['tahun']}} yang selanjutnya diteruskan kepada Dinas Sosial atau Kesehatan Kab. Malang.</td>
  </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian yang dapat kami sampaikan dan besar harapan kami untuk dapat membantu warga kami tersebut, sebelum dan sesudahnya kami mengucapkan terima kasih.
        </td>
      <table  align="center"  width="600" >
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td width="140"><center></center></td>
          <td width="100"></td>
        </tr>
        <tr>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td></td>
          <td><center> <u> <b>{{$Sktidakmampu3['nama_kades']}}<b> </u></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
