<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Sktidakmampu1 as $Sktidakmampu1)
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
    <table align="center" width="600" >
      <tr>
      <font size="5"><center><b><u>SURAT KETERANGAN</u></b><center>
      </tr>
      <tr>
      <font size="3"><center>Nomor :  440.4/     <b>433</b>      /35.07.31.2006/2019<center>
    </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="540" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Junrejo Kecamatan Junrejo Kota Batu menerangkan dengan sebenarnya bahwa :
        </td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama lengkap</td>
        <td width="330"> : <b>{{$Sktidakmampu1['nama']}}</b></td>
        <td></td>
      </tr>
      <tr>
        <td>Jenis kelamin</td>
        <td width="330"> : {{$Sktidakmampu1['jenis_kelamin']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat, Tgl lahir</td>
        <td width="330"> : {{$Sktidakmampu1['ttl']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kewarganegaraan</td>
        <td width="330"> : {{$Sktidakmampu1['kewarganegaraan']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>A g a m a </td>
        <td width="330"> : {{$Sktidakmampu1['agama']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Status </td>
        <td width="330"> : {{$Sktidakmampu1['status']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="330"> : {{$Sktidakmampu1['pekerjaan']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="330"> : {{$Sktidakmampu1['alamat']}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="15" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adalah benar – benar penduduk Desa Junrejo Kecamatan Junrejo Kota Batu yang mana Perekonomiannya benar-benar kurang mampu, surat keterangan ini dipergunakan untuk kelengkapan persyaratan {{$Sktidakmampu1['persyaratan']}}.  </tr>
      <tr>
          <td height="20" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">Demikian Surat keterangan ini di buat dengan sebenarnya dan dapat di gunakan sebagaimana mestinya dan atas perhatian  kami sampaikan terimakasih</td>
      </tr>
      <tr>
        <td height="25" colspan="2"></td>
      </tr>
      <table  align="center"  width="600" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo,{{$Sktidakmampu1['tgl_hari_ini']}}</center></td>
        </tr>
        <tr>
          <td><center>Yang Berkepentingan</center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center> <b><u>{{$Sktidakmampu1['nama_berkepentingan']}}</u><b/></center></td>
          <td></td>
          <td><center> <b><u>{{$Sktidakmampu1['nama_kades']}} </u></b></center></td>
        </tr>
        <tr>
          <td height="5"></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td width="230"></td>
          <td><u>No. {{$Sktidakmampu1['no']}}</u></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td><center>Mengetahui</center></td>
        </tr>
        <tr>
          <td><b><center>CAMAT JUNREJO.</center></b></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center><u>{{$Sktidakmampu1['nama_camat']}}</u></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
