<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Sktidakmampu2 as $Sktidakmampu2)
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
    <table align="center" width="600" >
      <tr>
      <font size="4"><center><b><u>SURAT KETERANGAN MASUK DATA DTKS</u></b><center>
      </tr>
      <tr>
      <font size="3"><center>Nomor :  440.4/     <b></b>      /35.07.31.2006/2019<center>
    </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Junrejo Kecamatan Junrejo Kabupaten Malang menerangkan dengan sebenarnya bahwa :
        </td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama lengkap</td>
        <td width="430"> : <b>{{$Sktidakmampu2['nama']}}</b></td>
        <td></td>
      </tr>
      <tr>
        <td>Jenis kelamin</td>
        <td width="430"> : {{$Sktidakmampu2['jenis_kelamin']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat, Tgl lahir</td>
        <td width="430"> : {{$Sktidakmampu2['ttl']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>A g a m a </td>
        <td width="430"> : {{$Sktidakmampu2['agama']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Status </td>
        <td width="430"> : {{$Sktidakmampu2['status']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="430"> : {{$Sktidakmampu2['pekerjaan']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="430"> : {{$Sktidakmampu2['alamat']}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adalah benar – benar penduduk Desa Junrejo Kecamatan Junrejo Kabupaten Malang yang kurang mampu ekonominya. Dan memerlukan Pelayanan Pengobatan di
{{$Sktidakmampu2['tempat_pengobatan']}}.
  </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sehubungan orang tersebut di atas kurang mampu, maka dengan ini kami mohon untuk yang bersangkutan diberikan keringanan/bebas biaya Pengobatan ({{$Sktidakmampu2['sakit']}})  dan orang tersebut diatas terdaftar dalam daftar DTKS Tahun {{$Sktidakmampu2['tahun']}}.Dengan No. Urut : {{$Sktidakmampu2['no_urut']}}</td>
        <tr>
          <td height="15" colspan="2"></td>
        </tr>
      <tr>
        <td colspan="2">Demikian Surat keterangan ini di buat dengan sebenarnya dan dapat di gunakan sebagaimana mestinya dan atas perhatian  kami sampaikan terimakasih</td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <table  align="center"  width="600" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo,{{$Sktidakmampu2['tgl_hari_ini']}}</center></td>
        </tr>
        <tr>
          <td><center>Yang Berkepentingan</center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="60"></td>
        </tr>
        <tr>
          <td><center> <b><u>{{$Sktidakmampu2['nama_berkepentingan']}}</u></b></center></td>
          <td></td>
          <td><center> <b><u> {{$Sktidakmampu2['nama_kades']}} </u></b></center></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td><center>Mengetahui</center></td>
        </tr>
        <tr>
          <td><center>CAMAT KROMENGAN.</center></td>
        </tr>
        <tr>
          <td height="60"></td>
        </tr>
        <tr>
          <td><center><b><u>{{$Sktidakmampu2['nama_camat']}}</u></b></center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
      </table>
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
      <table  align="center"  width="600" >
        <tr>
          <td colspan="2"><b><u>Catatan :</u></b></td>
        </tr>
        <tr>
          <td colspan="2">Surat ini berlaku sampai dengan 3 bulan sejak tanggal permohonan pengajuan.</td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
