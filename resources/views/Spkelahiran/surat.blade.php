<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Spkelahiran as $Spkelahiran)
    <table align="center" width="600" >
      <tr>
        <td height="30"></td>
      </tr>
      <tr>
      <td><center>
        <font size="6"><b>Surat Pernyataan<b></font><br>
      </td>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
    </table>

    <table align="center" width="600" >
      <tr>
        <td colspan="2">Yang bertanda tangan dibawah ini, saya :
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td width="420"> : {{$Spkelahiran['nama']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td width="420"> : {{$Spkelahiran['nik']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Nomor KK</td>
        <td width="420"> : {{$Spkelahiran['nomor_kk']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td width="420"> : {{$Spkelahiran['jenis_kelamin']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="420"> : {{$Spkelahiran['pekerjaan']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td width="420"> : {{$Spkelahiran['alamat']}}<br></td>
        <td></td>
      </tr>
      <tr>
        <td height="35" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">Menyatakan dengan sebenarnya bahwa data-data dalam berkas yang saya<br>
                        lampirkan untuk pengurusan penerbitan akta kelahiran :
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td width="420"> : {{$Spkelahiran['nama_anak']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat tanggal lahir</td>
        <td width="420"> : {{$Spkelahiran['ttl']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kelahiran ke</td>
        <td width="420"> : {{$Spkelahiran['kelahiran_ke']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Nama Ayah</td>
        <td width="420"> : {{$Spkelahiran['nama_ayah']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Nama Ibu</td>
        <td width="420"> : {{$Spkelahiran['nama_ibu']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="420"> : {{$Spkelahiran['pekerjaan_ortu']}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td width="420"> : {{$Spkelahiran['alamat_ortu']}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="35" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">Adalah benar dapat dipertanggung jawabkan.
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
    </table>
    <table align="center" width="600" >
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila
                              pernyataan saya tidak benar saya bersedia dikenkan sanksi pidana sebagaimana
                              ditentukan dalam pasal 93 Undang-undang Nomor 23 Tahun 2006 tentang
                              Administrasi Kependudukan Bawa “setiap penduduk yang dengan sengaja
                              memalsukan surat dan /atau dokumen kepada intasi pelaksana dalam melaporkan
                              peristiwa kependudukan dan Peristiwa Penting dipidana dengan pidana penjara
                              Paling lama 6 (enam) tahun dan /atau denda paling banyak Rp. 50.000.000 (Lima
                              Puluh juta rupiah)” dan dokumen yang diterbitkan akibat dari pernyataan ini
                              menjadi tidak sah.
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="50" colspan="2"></td>
      </tr>
    </table>
    <br>

    <table  align="center" >
      <tr>
        <td width="300"><center>Mengetahui</center></td>
        <td width="300"><center>Junrejo, {{$Spkelahiran['tgl_hari_ini']}}</center></td>
      </tr>
      <tr>
        <td><center>Kepala Desa Junrejo</center></td>
        <td><center>Yang membuat pernyataan</center></td>
      </tr>
      <tr>
        <td height="70"></td>
      </tr>
      <tr>
        <td><center> <b> <u> {{$Spkelahiran['nama_kades']}} </u></b></center></td>
        <td><center> <b> <u> {{$Spkelahiran['nama_pernyataan']}} </u></b></center></td>
      </tr>
    </table>
      @endforeach
  </body>
</html>
