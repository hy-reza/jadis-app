<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uspcerairujuk1 as $Uspcerairujuk1)
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
      <font size="3"><center><b>Nomor :  {{$Uspcerairujuk1->nomer_surat}}</b><center>
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
        <td>Nama </td>
        <td width="350"> : {{$Uspcerairujuk1->nama}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Umur</td>
        <td width="350"> : {{$Uspcerairujuk1->umur}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="350"> : {{$Uspcerairujuk1->pekerjaan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat </td>
        <td width="350"> : {{$Uspcerairujuk1->alamat}}</td>
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
      <table align="center" width="500" >
        <tr>
          <td>Nama </td>
          <td width="350"> : {{$Uspcerairujuk1->nama_sah}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Umur</td>
          <td width="350"> : {{$Uspcerairujuk1->umur_sah}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td width="350"> : {{$Uspcerairujuk1->pekerjaan_sah}}</td>
          <td></td>
        </tr>
        <tr>
          <td>Alamat </td>
          <td width="350"> : {{$Uspcerairujuk1->alamat_sah}}</td>
          <td></td>
        </tr>
        <tr>
          <td height="40" colspan="2"></td>
        </tr>
      <table  align="center"  width="600" >
        <tr>
          <td colspan="2">Telah pergi meninggalkan Istri  tanpa ijin Desa / Kelurahan *) dan keluarganya kurang lebih {{$Uspcerairujuk1->lama_tahun}} {{$Uspcerairujuk1->lama_bulan}} Bulan hingga sekarang dan tidak diketahui alamatnya dengan jelas di  wilayah Rebuplik Indonesia.</td>
        <tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.
        </tr>
          <td height="20"></td>
        </tr>
      </table>
      <table  align="center"  width="550" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Junrejo, {{$Uspcerairujuk1->tgl_hari_ini}}</center></td>
        </tr>
        <tr>
          <td><center>Kepala Desa Junrejo</center></td>
          <td></td>
          <td><center>Pelapor</center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center> <u> {{$Uspcerairujuk1->nama_kades}} </u></center></td>
          <td></td>
          <td><center> <u> {{$Uspcerairujuk1->nama_pelapor}} </u></center></td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
