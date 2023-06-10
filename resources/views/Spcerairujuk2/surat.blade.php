<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Spcerairujuk2 as $Spcerairujuk2)
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
      <td height="20" colspan="2"></td>
    </tr>
    </table>
    <table align="center" width="600" >
      <tr>
      <font size="5"><center><b><u>SURAT KETERANGAN</u></b><center>
      </tr>
      <tr>
      <font size="3"><center>Nomor :  474.2/    /35.07.31.2006/2019<center>
    </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="600" >

      <tr>
        <td colspan="2">Kami yang bertanda tangan dibawah ini, Kepala Desa Junrejo Kecamatan Junrejo Kota Batu Propinsi Jawa Timur.
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
        <td>Nama </td>
        <td width="350"> :<b> {{$Spcerairujuk2['nama']}} </b></td>
        <td></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td width="350"> : {{$Spcerairujuk2['nik']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat Tgl Lahir</td>
        <td width="350"> : {{$Spcerairujuk2['ttl']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="350"> : {{$Spcerairujuk2['pekerjaan']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="350"> : {{$Spcerairujuk2['alamat']}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="20" colspan="2"></td>
      </tr>
    </table>

      <table align="center" width="600" >
        <tr>
          <td>Suami / Istri ) sah dari </td>
          <td width="403"> :</td>
          <td></td>
        </tr>
      </table>
      <table align="center" width="500">
        <tr>
          <td>Nama </td>
          <td width="350"> : <b>{{$Spcerairujuk2['nama_sah']}}</b></td>
          <td></td>
        </tr>
        <tr>
          <td>Nik</td>
          <td width="350"> : {{$Spcerairujuk2['nik_sah']}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Tempat Tgl Lahir</td>
          <td width="350"> : {{$Spcerairujuk2['ttl_sah']}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td width="350"> : {{$Spcerairujuk2['pekerjaan_sah']}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Alamat </td>
          <td width="350"> : {{$Spcerairujuk2['alamat_sah']}}</td>
          <td></td>
        </tr>
        <tr>
          <td height="40" colspan="2"></td>
        </tr>
      <table  align="center"  width="600" >
        <tr>
          <td colspan="2">Bahwa orang tersebut diatas adalah benar – benar Penduduk Desa Junrejo Kecamatan Junrejo Kota Batu Jawa Timur. bahwa orang tersebut diatas adalah pasangan Suami & Istri. Menerangkan suami orang tersebut diatas <b>({{$Spcerairujuk2['suami']}})</b> saat ini pergi bekerja di {{$Spcerairujuk2['negara']}}.</td>
        </tr>
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
          <td width="270"><center>Junrejo,{{$Spcerairujuk2['tgl_hari_ini']}}</center></td>
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
          <td><center><b> <u>{{$Spcerairujuk2['nama_kades']}} </u> </b></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
