<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Uspkematian as $Uspkematian)
    <table align="center">
      <tr>
        <td height="30"></td>
      </tr>
      <tr>
      <td><center>
        <font size="4"><b>SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK (SPTJM)<br> KEBENARAN DATA KEMATIAN<b></font>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
    </table>
    <table align="center" width="700">
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
        <td width="500">: <b>{{$Uspkematian->nama}}</b></td>
        <td></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td width="500">: {{$Uspkematian->nik}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Nomor KK</td>
        <td width="500">: {{$Uspkematian->nomor_kk}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td width="500">: {{$Uspkematian->jenis_kelamin}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td width="500">: {{$Uspkematian->pekerjaan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td width="500">: {{$Uspkematian->alamat}}<br></td>
        <td></td>
      </tr>
      <tr>
        <td>Status Hubungan Keluarga</td>
        <td width="500">: {{$Uspkematian->status_hubungan_keluarga}}<br></td>
        <td></td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini menyatakan bahwa yang tersebut dibawah ini :
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td width="500">: <b>{{$Uspkematian->nama_meninggal}}</b></td>
        <td></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td width="500">: {{$Uspkematian->nik_meninggal}}</td>
        <td></td>
      </tr>
      <tr>
        <td>No.KK</td>
        <td width="500">: {{$Uspkematian->nomor_kk_meninggal}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat, Tanggak Lahir</td>
        <td width="500">: {{$Uspkematian->ttl_meninggal}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td width="500">: {{$Uspkematian->alamat_meninggal}}</td>
        <td></td>
      </tr>
        <td colspan="2">Telah meninggal dunia pada Tanggal {{$Uspkematian->tanggal_meninggal}}, Pukul {{$Uspkematian->pukul_meninggal}}<br>
          Di alamat {{$Uspkematian->dialamat_meninggal}}
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="5" colspan="2"></td>
      </tr>
      <tr>
      </table>
      <table align="center" width="700">

        <td colspan="2" align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila pernyataan saya tidak benar
                              saya bersedia dikenkan sanksi pidana sebagaimana ditentukan dalam
                              pasal 93 Undang-undang Nomor 23 Tahun 2006 tentang Administrasi Kependudukan
                              Bawa “setiap penduduk yang dengan sengaja memalsukan surat dan /atau dokumen
                              kepada intasi pelaksana dalam melaporkan peristiwa kependudukan dan Peristiwa
                              Penting dipidana dengan pidana penjara Paling lama 6 (enam) tahun dan /atau denda
                              paling banyak Rp. 50.000.000 (LimaPuluh juta rupiah)”.
        </td>
        <td></td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat pernyataan ini saya buat sebagai kelengkapan penerbitan Akta Kematian.
        </td>
        <td></td>
      </tr>
    </table>
    <br>

    <table  align="center" >
      <tr>
        <td width="300"><center></center></td>
        <td width="40"></td>
        <td width="270"><center>Junrejo,{{$Uspkematian->tgl_hari_ini}}</center></td>
      </tr>
      <tr>
        <td><center></center></td>
        <td></td>
        <td><center>Yang membuat pernyataan</center></td>
      </tr>
      <tr>
        <td><center></center></td>
        <td></td>
        <td height="70"> materai 6000</td>
      </tr>
      <tr>
        <td><center></center></td>
        <td></td>
        <td><center> <u> {{$Uspkematian->nama_pernyataan}} </u></center></td>
      </tr>
      <tr>
        <td height="150"></td>
      </tr>
    </table>
    <table align="center">
    <tr>
      <td><center></center></td>
      <td><center>Mengetahui</center></td>
    </tr>
    <tr>
      <td width="300"><center>Ketua RT</center></td>
      <td width="200"><center>Kepala Desa Junrejo</center></td>
      <td width="300"><center>Ketua RW</center></td>
    </tr>
    <tr>
      <td height="70"></td>
    </tr>
    <tr>
      <td><center> <b><u>{{$Uspkematian->nama_rt}} </u></b></center></td>
      <td><center> <b><u> {{$Uspkematian->nama_kades}} </u></b></center></td>
      <td><center> <b><u> {{$Uspkematian->nama_rw}} </u></b></center></td>
    </tr>
  </table>
  @endforeach
  </body>
</html>
