<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uskpenerimaanpensiun as $Uskpenerimaanpensiun)
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
      <td height="10" colspan="2"></td>
    </tr>
    </table>
    <table align="center" width="600" >
      <tr>
      <font size="5"><center><b><u>SURAT KETERANGAN</u></b><center>
      </tr>
      <tr>
      <font size="3"><b><center>NOMOR: {{$Uskpenerimaanpensiun->nomer_surat}}<center></b>
    </tr>
    <tr>
      <td height="20" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td>A</td>
        <td width="150">Diberikan kepada</td>
        <td width="380"> :</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Nama lengkap </td>
        <td width="380"> : <b> {{$Uskpenerimaanpensiun->nama_lengkap}} </b></td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Jenis Kelamin</td>
        <td width="380"> : {{$Uskpenerimaanpensiun->jenis_kelamin}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Tempat/tgl lahir</td>
        <td width="380"> : {{$Uskpenerimaanpensiun->ttl}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Kewarganegaraan</td>
        <td width="380"> : {{$Uskpenerimaanpensiun->kewarganegaraan}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Agama</td>
        <td width="380"> : {{$Uskpenerimaanpensiun->agama}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Status Perkawinan</td>
        <td width="380"> : {{$Uskpenerimaanpensiun->status_perkawinan}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Pekerjaan </td>
        <td width="380"> : {{$Uskpenerimaanpensiun->pekerjaan}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Alamat </td>
        <td width="380"> : {{$Uskpenerimaanpensiun->alamat}}</td>
      </tr>
      <tr>
        <td height="20" colspan="3"></td>
      </tr>
      <tr>
        <td>B</td>
        <td width="150">Dipergunakan untuk </td>
        <td width="380"> : {{$Uskpenerimaanpensiun->dipergunakaan_untuk}}</td>
      </tr>
      <tr>
        <td>C</td>
        <td width="150">Keterangan</td>
        <td width="380"> :</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Tujuan	</td>
        <td width="380"> : {{$Uskpenerimaanpensiun->tujuan}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Surat Pengantar Dari </td>
        <td width="380"> : {{$Uskpenerimaanpensiun->surat_pengantar}}</td>
      </tr>
      <tr>
        <td height="20" colspan="3"></td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Daf Kartu Keluaarga </td>
        <td width="380"> : {{$Uskpenerimaanpensiun->daf_kk}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">No KTP </td>
        <td width="380"> : {{$Uskpenerimaanpensiun->no_ktp}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Lain-lain <br><br><br><br></td>
        <td width="380"> : Yang bernama <b>{{$Uskpenerimaanpensiun->nama_lengkap}}</b><br>
		    Yang tercantum dalam KTP adalah orang sama yang <br>
		    Yang tercantum dalam SK Penerimaan Pensiun <br>
		   <b>({{$Uskpenerimaanpensiun->nama_bin}})</b> </td>
      </tr>
      <tr>
        <td height="10" colspan="3"></td>
      </tr>
    </table>

    <table align="center" width="600" >
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini kami buat dengan sebenarnya dan dipergunakan sebagaimana mestinya .
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td width="300"><center></center></td>
          <td width="40"></td>
          <td width="270"><center>Malang, {{$Uskpenerimaanpensiun->tgl_hari_ini}}</center></td>
        </tr>
        <tr>
          <td><center><u>Pemegang Surat</u></center></td>
          <td></td>
          <td><center>Kepala Desa Junrejo</center></td>
        </tr>
        <tr>
          <td height="70"></td>
        </tr>
        <tr>
          <td><center><b> <u> {{$Uskpenerimaanpensiun->nama_pemegang}} </u></b></center></td>
          <td></td>
          <td><center><b> <u> {{$Uskpenerimaanpensiun->nama_kades}} </u></b></center></td>
        </tr>
        @endforeach
      </table>
  </body>
</html>
