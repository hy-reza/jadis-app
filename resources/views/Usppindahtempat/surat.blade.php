<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach($Usppindahtempat as $Usppindahtempat)
    <table align="center">
      <tr>
        <td height="30"></td>
      </tr>
      <tr>
      <td><center>
        <font size="5"><b>Surat Pernyataan<br>Permohonan Pindah Tempat Warga Negara Indonesia<b></font><br>
      </td>
    </tr>
    <tr>
      <td height="30"></td>
    </tr>
    </table>

    <table align="center" width="700" >
      <tr>
        <td colspan="2">Yang bertanda tangan dibawah ini:
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td width="430"> : {{$Usppindahtempat->nama}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td width="430"> : {{$Usppindahtempat->ttl}}</td>
        <td></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td width="430"> : {{$Usppindahtempat->nik}}</td>
        <td></td>
      </tr>
      <tr>
        <td><b>Alamat Asal</b></td>
        <td width="430"> : {{$Usppindahtempat->alamat_asal}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Desa/Kelurahan</td>
        <td width="430"> : {{$Usppindahtempat->desa_kelurahan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kabupaten/Kota</td>
        <td width="430"> : {{$Usppindahtempat->kabupaten_kota}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td width="430"> : {{$Usppindahtempat->provinsi}}</td>
        <td></td>
      </tr>
      <tr>
        <td colspan="2"><b>Data Kepindahan/Tujuan Pindah<b>
        </td>
      </tr>
      <tr>
        <td>Desa/Kelurahan/RT/RW</td>
        <td width="430"> : {{$Usppindahtempat->desa_kelurahan_rt_rw_tujuan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kecamatan</td>
        <td width="430"> : {{$Usppindahtempat->kecamatan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Kabupaten/Kota</td>
        <td width="430"> : {{$Usppindahtempat->kabupaten_kota_tujuan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Provinsi</td>
        <td width="430"> : {{$Usppindahtempat->provinsi_tujuan}}</td>
        <td></td>
      </tr>
      <tr>
        <td>Alasan Pindah</td>
        <td width="430"> : {{$Usppindahtempat->alasan_pindah}}</td>
        <td></td>
      </tr>
      <tr>
        <td height="30" colspan="2"></td>
      </tr>
  </table>

  <table  align="center"  width="700" >
      <tr>
        <td colspan="2">Dengan Pengikut :
        </td>
      </tr>
    </table>
    <table  align="center"  width="700" border="1" >
      <tr>
        <td width="10"><center>NO</center></td>
        <td width="150"><center>NIK</center></td>
        <td width="150"><center>NAMA</center></td>
        <td width="100"><center>Tanggal Lahir</center></td>
        <td width="100"><center>Hubungan Keluarga</center></td>
      </tr>
      <tr>
        <td><center>1</center></td>
        <td><center>{{$Usppindahtempat->nik_1}}</center></td>
        <td><center>{{$Usppindahtempat->nama_1}}</center></td>
        <td><center>{{$Usppindahtempat->tgl_lahir_1}}</center></td>
        <td><center>{{$Usppindahtempat->hubungan_keluarga_1}}</center></td>
      </tr>
      <tr>
        <td><center>2</center></td>
        <td><center>{{$Usppindahtempat->nik_2}}</center></td>
        <td><center>{{$Usppindahtempat->nama_2}}</center></td>
        <td><center>{{$Usppindahtempat->tgl_lahir_2}}</center></td>
        <td><center>{{$Usppindahtempat->hubungan_keluarga_2}}</center></td>
      </tr>
    </table>
    <table  align="center"  width="700" >
      <tr>
        <td height="20" colspan="2"></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini saya mengajukan permohonan surat pindah tempat kepada Dinas Kependudukan dan Pencatatan Sipil Kabupaten Malang, surat pernyataan/permohonan ini saya buat tanpa ada pemaksaan dari pihak manapun juga dan saya tidak akan melibatkan Dinas Kependudukan dan Pencatatan Sipil Kabupaten Malang bila mana suatu hari ada permasalahan dengan surat pindah saya. Dan saya bersedia dituntut di pengadilan sesuai aturan yang berlaku apabila saya memalsukan data ini.
        </td>
      </tr>
    </table>
    <br>

    <table  align="center"  width="700" >
      <tr>
        <td width="300"><center></center></td>
        <td width="40"></td>
        <td width="270"><center>Junrejo, {{$Usppindahtempat->tgl_hari_ini}}</center></td>
      </tr>
      <tr>
        <td><center></center></td>
        <td></td>
        <td><center>Pemohon</center></td>
      </tr>
      <tr>
        <td height="70"></td>
      </tr>
      <tr>
        <td><center> <u></u></center></td>
        <td></td>
        <td><center> <u> <b> {{$Usppindahtempat->nama_pemohon}} </b></u></center></td>
      </tr>
    </table>
      <table  align="center"  width="700" >
        <tr>
          <td height="150"></td>
        </tr>
        <tr>
          <td colspan="2">Persyaratan :
          </td>
        </tr>
        <tr>
          <td colspan="2">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.	KK asli dan fotocopy rangkap 2 (Dua) Lembar<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.	KTP Elektrik asli dan fotocopy rangkap 2 (Dua) lembar<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.	Mengisi Surat pernyataan permohonan pindah Tempat Warga Negara Indonesia dan <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masing-masing difotocopy rangkap 2 (dua) lembar<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.	Fotocopy surat Nikah/Akte perkawinan Capil/Akte cerai dari Pengadilan Agama/Akte <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cerai dari Capil rangkap 2 (dua) lembar<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.	Surat ijin dari Suami/Istri bila salah satu pasangan pindah dalam1 KK (bermaterai) + <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fotocopy KTP Suami/Istri yang memberi Ijin<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.	Surat ijin dari Kepala Keluarga bila salah satu anggota keluarga dibawah 17 Tahun <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pindah (bermaterai) + fotocopy KTP Kepala Keluarga yang memberi Ijin

          </td>
        </tr>
      </table>
      @endforeach
  </body>
</html>
