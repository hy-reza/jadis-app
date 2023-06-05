<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uspcerairujuk4 as $Uspcerairujuk4)
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
      <font size="3"><center><b>Nomor :  {{$Uspcerairujuk4->nomer_surat}}</b><center>
    </tr>
    <tr>
      <td height="10" colspan="2"></td>
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

    </table>
    <table align="center" width="500" >
      <tr>
        <td>Nama </td>
        <td width="350"> : <b>{{$Uspcerairujuk4->nama}}</b></td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat, tgl lahir</td>
        <td width="350"> : {{$Uspcerairujuk4->ttl}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td width="350"> : {{$Uspcerairujuk4->agama}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan </td>
        <td width="350"> : {{$Uspcerairujuk4->pekerjaan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="350"> : {{$Uspcerairujuk4->alamat}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="5" colspan="3"></td>
      </tr>
    </table>

      <table align="center" width="600" >
        <tr>
          <td>Telah menikah di bawah tangan (sirih secara agama islam) dengan 	: </td>
        </tr>
      </table>
      <table align="center" width="500" >
      <tr>
        <td>Nama </td>
        <td width="350"> : <b>{{$Uspcerairujuk4->nama_istri}}</b></td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat, tgl lahir</td>
        <td width="350"> : {{$Uspcerairujuk4->ttl_istri}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td width="350"> : {{$Uspcerairujuk4->agama_istri}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan </td>
        <td width="350"> : {{$Uspcerairujuk4->pekerjaan_istri}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="350"> : {{$Uspcerairujuk4->alamat_istri}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="5" colspan="3"></td>
      </tr>
    </table>
    <table align="center" width="600" >
      <tr>
        <td>Dengan Wali Nikah yang bernama : </td>
      </tr>
    </table>
    <table align="center" width="500" >
    <tr>
      <td>Nama </td>
      <td width="350"> : <b>{{$Uspcerairujuk4->nama_wali}}</b></td>
      <td></td>
    </tr>
    <tr>
      <td>Tempat, tgl lahir</td>
      <td width="350"> : {{$Uspcerairujuk4->ttl_wali}}</td>
      <td></td>
    </tr>
    <tr>
      <td>Agama</td>
      <td width="350"> : {{$Uspcerairujuk4->agama_wali}}</td>
      <td></td>
    </tr>
    <tr>
      <td>Pekerjaan </td>
      <td width="350"> : {{$Uspcerairujuk4->pekerjaan_wali}}</td>
      <td></td>
    </tr>
    <tr>
      <td>Alamat </td>
      <td width="350"> : {{$Uspcerairujuk4->alamat_wali}}</td>
      <td></td>
    </tr>
    <tr>
      <td height="5" colspan="3"></td>
    </tr>
  </table>
      <table  align="center"  width="600" >
        <tr>
          <td colspan="2">Yang dilaksanakan pada tanggal {{$Uspcerairujuk4->tgl_pelaksaan}} dengan maskawin {{$Uspcerairujuk4->maskawin}} dengan saksi-saksi :</td>
        </tr>
        <table align="center" width="500" >
          <tr>
            <td>1. </td>
            <td width="450">Sdr.{{$Uspcerairujuk4->saksi1}}</td>
          </tr>
          <tr>
            <td>2</td>
            <td width="450"> Sdr.{{$Uspcerairujuk4->saksi2}}</td>
          </tr>
  <table align="center" width="600"  >
        <tr>
            <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya dan agar dapat dipergunakan sebagaimana mestinya.
        </tr>
  </table>
          <tr>
            <td height="10" colspan="2"></td>
          </tr>
          <tr>
            <td height="5" colspan="2"></td>
          </tr>
        </table>

      <table  align="center"  width="550" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo,{{$Uspcerairujuk4->tgl_hari_ini}}</center></td>
        </tr>
        <tr>
          <td><center></center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="50"></td>
        </tr>
        <tr>
          <td><center> <u></u></center></td>
          <td></td>
          <td><center> <b><u>{{$Uspcerairujuk4->nama_kades}} </u></b></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
