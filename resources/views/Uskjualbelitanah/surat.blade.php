<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uskjualbelitanah as $Uskjualbelitanah)
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
      <font size="4"><center><b><u>SURAT KETERANGAN JUAL BELI TANAH</u></b><center>
      </tr>
    <tr>
      <td height="10" colspan="2"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini,kami masing-masing pihak, setuju untuk membuat perjanjian Jual Beli tanah ,antara:
        </td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
    </table>
    <table align="center" width="600" >
      <tr>
        <td>I.</td>
        <td width="150">Nama lengkap </td>
        <td width="380"> : {{$Uskjualbelitanah->nama_lengkap}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Tempat/tgl lahir</td>
        <td width="380"> : {{$Uskjualbelitanah->ttl}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Agama</td>
        <td width="380"> : {{$Uskjualbelitanah->agama}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Pekerjaan </td>
        <td width="380"> : {{$Uskjualbelitanah->pekerjaan}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Alamat </td>
        <td width="380"> : {{$Uskjualbelitanah->alamat}}</td>
      </tr>
      <tr>
        <td height="5" colspan="3"></td>
      </tr>
      <tr>
        <td>II.</td>
        <td width="150">Nama lengkap </td>
        <td width="380"> : {{$Uskjualbelitanah->nama_lengkap_1}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Tempat/tgl lahir</td>
        <td width="380"> : {{$Uskjualbelitanah->ttl_1}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Agama</td>
        <td width="380"> : {{$Uskjualbelitanah->agama_1}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Pekerjaan </td>
        <td width="380"> : {{$Uskjualbelitanah->pekerjaan_1}}</td>
      </tr>
      <tr>
        <td></td>
        <td width="150">Alamat </td>
        <td width="380"> : {{$Uskjualbelitanah->alamat_1}}</td>
      </tr>
      <tr>
        <td height="5" colspan="3"></td>
      </tr>
    </table>

    <table align="center" width="600" >

        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan peryataan tersebut dibuat dengan sebenarnya,bahwa pihak I (satu) menjual tanah perkarangan kepada pihak ke II (dua) dengan ukuran Panjang. {{$Uskjualbelitanah->panjang}} m2  Lebar. {{$Uskjualbelitanah->lebar}} m2.Dengan batas-batas sebagai berikut:
        </tr>
      </table>
      <table align="center" width="600" >
        <tr>
          <td></td>
          <td width="150">Utara Tanah milik </td>
          <td width="380"> : {{$Uskjualbelitanah->utara}}</td>
        </tr>
        <tr>
          <td></td>
          <td width="150">Selatan Tanah milik	</td>
          <td width="380"> : {{$Uskjualbelitanah->selatan}}</td>
        </tr>
        <tr>
          <td></td>
          <td width="150">Timur Tanah milik</td>
          <td width="380"> : {{$Uskjualbelitanah->timur}}</td>
        </tr>
        <tr>
          <td></td>
          <td width="150">Barat Tanah milik </td>
          <td width="380"> : {{$Uskjualbelitanah->barat}}</td>
        </tr>
      </table>
      <table align="center" width="600" >
        <tr>
          <td colspan="2">Dengan nilai sebesar Rp.{{$Uskjualbelitanah->nilai}},- ({{$Uskjualbelitanah->terbilang}}) {{$Uskjualbelitanah->kontan}}.
        </tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setelah surat perjanjian ini ditanda tangani oleh masing-masing pihak I(satu) dan pihak II (dua) dan saksi-saksi,maka pihak ke I (satu) beserta ahliwarisnya tidak lagi berhak atas tanah tersebut di atas dan syah menjadi milik pihak II (dua) beserta ahliwarisnya.
        </tr>
        <tr>
          <td height="150" colspan="3"></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dengan sebenarnya dan dapat digunakan untuk keperluan selanjutnya.
        </tr>
        <tr>
          <td height="30"></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td width="150"><center></center></td>
          <td width="250"></td>
          <td width="250"><center>Junrejo, {{$Uskjualbelitanah->tgl_hari_ini}}</center></td>
        </tr>
      </table>
      <table  align="center"  width="600" >
        <tr>
          <td width="200"><center>Pihak Ke II<center></td>
          <td width="250"></td>
          <td width="200"><center>Pihak pertama</center></td>
        </tr>
        <tr>
          <td width="200"><center></center></td>
          <td width="200"><center>MENGETAHUI</center></td>
          <td width="200"><center></center></td>
        </tr>
        <tr>
          <td width="200"><center></center></td>
          <td width="200"><center>KEPALA DESA JUNREJO</center></td>
          <td width="200"><center></center></td>
        </tr>
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td><center>{{$Uskjualbelitanah->nama_pihak_1}}</center></td>
          <td></td>
          <td><center>{{$Uskjualbelitanah->nama_pihak_2}}</center></td>
        </tr>
        <tr>
          <td height="20"></td>
        </tr>
        <tr>
          <td width="100"><center></center></td>
          <td width="300"><center>{{$Uskjualbelitanah->nama_kades}}</center></td>
          <td width="100"><center></center></td>
        </tr>
        <tr>
          <td height="10" colspan="2"></td>
        </tr>
      </table>
      <table align="center" width="600" >
        <tr>
          <td colspan="2">Saksi-saksi:
          </td>
        </tr>
      </table>
      <table align="center" width="600" >
        <tr>
          <td>1.</td>
          <td width="200">{{$Uskjualbelitanah->saksi_1}} </td>
          <td width="350"> : ..........................................</td>
        </tr>
        <tr>
          <td>2.</td>
          <td width="200">{{$Uskjualbelitanah->saksi_2}}</td>
          <td width="350"> : ..........................................</td>
        </tr>
        @endforeach
  </body>
</html>
