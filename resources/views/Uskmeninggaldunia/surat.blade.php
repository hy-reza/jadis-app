<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uskmeninggaldunia as $Uskmeninggaldunia)
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
      <font size="4"><center><b><u>SURAT KETERANGAN</u></b><center>
      </tr>
      <tr>
      <font size="3"><center><b>Nomor :  {{$Uskmeninggaldunia->nomer_surat}}</b><center>
    </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>
    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Junrejo Kecamatan Junrejo Kabupaten Malang Provinsi Jawa Timur. Menerangkan dengan sebenarnya bahwa ;
      </tr>
      </table>

    <table align="center" width="600" >
      <tr>
        <td height="10"></td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Hari </td>
        <td width="350"> : {{$Uskmeninggaldunia->hari}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Tanggal  </td>
        <td width="350"> : {{$Uskmeninggaldunia->tanggal}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Jam  </td>
        <td width="350"> : {{$Uskmeninggaldunia->jam}}</td>
      </tr>
      <tr>
        <td height="10"></td>
      </tr>
    </table>
    <table align="center" width="600" >
      <tr>
        <td height="10"></td>
      </tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah meninggal dunia , saudara {{$Uskmeninggaldunia->nama_alm}}  ({{$Uskmeninggaldunia->umur_alm}} Tahun) alamat Rt.{{$Uskmeninggaldunia->rt}} Rw.{{$Uskmeninggaldunia->rw}}
Desa jambuwer karena sakit.

        </tr>
      </table>

      <table align="center" width="600" >
          <tr>
            <td colspan="2">Dan orang tersebut di atas benar-benar orang tua kandung dari saudara {{$Uskmeninggaldunia->nama_saudara}} {{$Uskmeninggaldunia->tempat_bekerja}}.
          </tr>
        </table>

    <table align="center" width="600" >
      <tr>
        <td height="10"></td>
      </tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini kami buat untuk dipergunakan sebagaimana mestinya .
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo, {{$Uskmeninggaldunia->tgl_hari_ini}}</center></td>
        </tr>
        <tr>
          <td><center></center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo </center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center><b> <u> </u></b></center></td>
          <td></td>
          <td><center><b> <u> {{$Uskmeninggaldunia->nama_kades}}</u></b></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
