<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Spcerairujuk3 as $Spcerairujuk3)
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
      <td height="20" colspan="2"></td>
    </tr>
    </table>
    <table align="center" width="600" >
      <tr>
      <font size="5"><center><b><u>SURAT KETERANGAN</u></b><center>
      </tr>
      <tr>
      <font size="3"><center>Nomor :  472.2/     /35.07.31.2006/2015<center>
    </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">Kami yang bertanda tangan dibawah ini, Kepala Desa Junrejo Kecamatan Junrejo Kabupaten Malang Propinsi Jawa Timur.
        </td>
      </tr>
      <tr>
        <td colspan="2">Menerangkan dengan sebenarnya bahwa :
        </td>
      </tr>
      <tr>
        <td height="20" colspan="2"></td>
      </tr>
    </table>
    <table align="center" width="500" >
      <tr>
        <td>1. </td>
        <td width="100">Nama</td>
        <td width="320">: <b>{{$Spcerairujuk3['nama']}} </b></td>
      </tr>
      <tr>
        <td></td>
        <td width="100"> Alamat</td>
        <td width="320">: {{$Spcerairujuk3['alamat']}}</td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="3">Adalah pasangan suami istri yang merupakan orangtua kandung dari anak {{$Spcerairujuk3['jenis_kelamin']}} bernama:{{$Spcerairujuk3['nama_anak']}}
        </tr>
        <tr>
          <td height="10" colspan="2"></td>
        </tr>
      <tr>
        <td>2.</td>
        <td width="100"> Nama</td>
        <td width="320">: <b>{{$Spcerairujuk3['nama_angkat']}} </b></td>
      </tr>
      <tr>
        <td> </td>
        <td width="100"> Alamat</td>
        <td width="320">: {{$Spcerairujuk3['alamat_angkat']}}</td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="3">Adalah pasangan suami istri yang merupakan orangtua Angkat / Pengampu dari anak {{$Spcerairujuk3['jenis_kelamin']}} bernama:{{$Spcerairujuk3['nama_anak']}}
        </tr>
      <tr>
        <td height="20" colspan="2"></td>
      </tr>
    </table>

      <table align="center" width="500" >
        <tr>
          <td width="30"> <center><b>></b></center></td>
          <td>Surat keterangan ini dipergunakan untuk Kelengkapan Administrasi Pernikahan di {{$Spcerairujuk3['tempat']}} kec. Junrejo Kab. Malang</td>
        </tr>
      </table>
        <table align="center" width="600" >
        <tr>
        <td height="10"></td>
      </tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.
        </tr>
          <td height="20"></td>
      </table>
      <table  align="center"  width="550" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo,{{$Spcerairujuk3['tgl_hari_ini']}}</center></td>
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
          <td><center><b> <u>{{$Spcerairujuk3['nama_kades']}} </u> </b></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
