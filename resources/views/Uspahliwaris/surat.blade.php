<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uspahliwaris as $Uspahliwaris)
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
      <font size="4"><center><b><u>SURAT PERYATAAN AHLI WARIS</u></b><center><br>
        <font size="3"><center><b><u>NOMOR: {{$Uspahliwaris->nomer_surat}}</u></b><center>
      </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan Surat Peryataan Waris tanggal {{$Uspahliwaris->tgl_hari_ini}}  Sebagaimana terlampir yang merupakan bagian yang tidak terpisahkan dari Surat Keterangan Waris ini,dengan ini Kepala Desa Junrejo Kecamatan Junrejo Kabupaten Malang,menerangkan bahwa Almarhum {{$Uspahliwaris->nama_alm}} sesuai dengan akte Kematian No.{{$Uspahliwaris->nomer_akte_kematian}} pada hari {{$Uspahliwaris->hari}}  Tanggal  {{$Uspahliwaris->tanggal}} Bulan {{$Uspahliwaris->bulan}} Tahun {{$Uspahliwaris->tahun}}  Telah meninggal dunia dan semasa hidupnya kawin dengan {{$Uspahliwaris->status_suami_istri}}  {{$Uspahliwaris->nama_suami_istri}} yang masih hidup dan dari perkawinan tersebut telah dilahirkan 1 ( satu ) orang anak yaitu :
        </td>
      </tr>
      <tr>
        <td height="20" colspan="2"></td>
      </tr>
    </table>
    <table align="center" width="500" >
      <tr>
        <td>1.</td>
        <td width="100">Nama </td>
        <td width="350"> : {{$Uspahliwaris->nama_anak}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="100">Umur</td>
        <td width="350"> : {{$Uspahliwaris->umur_anak}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="100">Pekerjaan</td>
        <td width="350"> : {{$Uspahliwaris->pekerjaan_anak}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="100">Alamat </td>
        <td width="350"> : {{$Uspahliwaris->alamat_anak}}</td>
      </tr>
      <tr>
        <td height="20" colspan="3"></td>
      </tr>
    </table>

        <table align="center" width="600" >
        <tr>
        <td height="10"></td>
      </tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya dan agar dapat dipergunakan sebagaimana mestinya
        </tr>
          <td height="20"></td>
          <tr>
            <td>No.Reg. {{$Uspahliwaris->no_req}}  </td>
            <td> </td>
          </tr>
          <td height="20"></td>
      </table>
      <table  align="center"  width="550" >
        <tr>
          <td width="300"><center>Mengetahui, </center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo, {{$Uspahliwaris->tgl_hari_ini}}</center></td>
        </tr>
        <tr>
          <td><center><b>CAMAT – KROMENGAN</b></center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center>{{$Uspahliwaris->nama_camat}}</center></td>
          <td></td>
          <td><center> <u>{{$Uspahliwaris->nama_kades}} </u></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
