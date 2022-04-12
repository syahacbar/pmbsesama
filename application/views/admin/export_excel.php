<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Pendaftar Sesama 2022-2023</title>

  </head>
  
  <body>
    <h4>Data Pendaftar Sesama</h4>
    <h4>2022-2023</h4>
    <table border="1" cellpadding="8">
    <tr bgcolor="gray">
      <th rowspan="2">No.</th>
      <th colspan="27">Identitas Pendaftar</th>
      <th colspan="10">Data Sekolah</th>
      <th colspan="16">Data Orang Tua</th>
      <th colspan="5">Data Wali</th>
      <th rowspan="2">Tanggal Pendaftaran</th>
    </tr>
    <tr bgcolor="gray">
      <!-- Identitas Pendaftar -->
      <th>No. Pendaftaran</th>
      <th>NISN</th>
      <th>NIK/No. KTP</th>
      <th>Nama Lengkap</th>
      <th>L/P</th>
      <th>Agama</th>
      <th>Suku</th>
      <th>Status Menikah</th>
      <th>Telp</th>
      <th>Email</th>
      <th>Tinggi Badan (cm)</th>
      <th>Berat Badan (kg)</th>
      <th>Prov. Tempat Lahir</th>
      <th>Kab/Kota Tempat Lahir</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Pilihan I</th>
      <th>Pilihan II</th>
      <th>Pilihan III</th>
      <th>Negara Tempat Tinggal</th>
      <th>Provinsi</th>
      <th>Kab/Kota</th>
      <th>Kec/Distrik</th>
      <th>Kel/Desa</th>
      <th>Kode Pos</th>
      <th>Alamat 1</th>
      <th>Alamat 2</th>
      <!-- Data Sekolah -->
      <th>Tahun Lulus SMTA</th>
      <th>Jurusan SMTA</th>
      <th>Jenis SMTA</th>
      <th>Nama SMTA</th>
      <th>NPSN SMTA</th>
      <th>Prov. SMTA</th>
      <th>Kab/Kota SMTA</th>
      <th>Rapor Sem 3</th>
      <th>Rapor Sem 4</th>
      <th>Rapor Sem 5</th>
      <!-- Data Orang Tua -->
      <th>NIK Ayah</th>
      <th>Nama Ayah</th>
      <th>Pekerjaan Ayah</th>
      <th>Pendidikan Ayah</th>
      <th>Alamat Kantor Ayah</th>
      <th>NIK Ibu</th>
      <th>Nama Ibu</th>
      <th>Pekerjaan Ibu</th>
      <th>Pendidikan Ibu</th>
      <th>Penghasilan Orang Tua</th>
      <th>Provinsi Orang Tua</th>
      <th>Kab/Kota Orang Tua</th>
      <th>Kec/Distrik Orang Tua</th>
      <th>Alamat Orang Tua</th>
      <th>Kode Pos Orang Tua</th>
      <th>No. Telp Orang Tua</th>
      <!-- Data Wali -->
      <th>Nama Wali</th>
      <th>Pekerjaan Wali</th>
      <th>Penghasilan Wali</th>
      <th>No. HP Wali</th>
      <th>Alamat Wali</th>
    </tr>
    <?php
    if( ! empty($pendaftar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
      $no=1;
      foreach($pendaftar as $r){ // Lakukan looping pada variabel siswa dari controller
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$r->username."</td>";
        echo "<td>".$r->nisn_pendaftar."</td>";
        echo "<td>".$r->nik."</td>";
        echo "<td>".strtoupper($r->namalengkap)."</td>";
        echo "<td>".strtoupper($r->jeniskelamin)."</td>";
        echo "<td>".strtoupper($r->agama)."</td>";
        echo "<td>".strtoupper($r->suku)."</td>";
        echo "<td>".strtoupper($r->statusmenikah)."</td>";
        echo "<td>".$r->phone."</td>";
        echo "<td>".$r->email."</td>";
        echo "<td>".$r->tinggibadan."</td>";
        echo "<td>".$r->beratbadan."</td>";
        echo "<td>".strtoupper($r->prov_tempatlahir)."</td>";
        echo "<td>".strtoupper($r->kab_tempatlahir)."</td>";
        echo "<td>".strtoupper($r->lokasi_tempatlahir)."</td>";
        if ($r->tgl_lahir != '')
          {
            echo "<td>".shortdate_indo($r->tgl_lahir)."</td>";
          } else {
            echo "<td></td>";
          }
        echo "<td>".strtoupper($r->prodipilihan1)."</td>";
        echo "<td>".strtoupper($r->prodipilihan2)."</td>";
        echo "<td>".strtoupper($r->prodipilihan3)."</td>";
        echo "<td>".strtoupper($r->negara_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->prov_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->kab_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->kec_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->des_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->kodepos_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->alamat_tempattinggal)."</td>";
        echo "<td>".strtoupper($r->alamatlain_tempattinggal)."</td>";
        echo "<td>".$r->tahunlulus_smta."</td>";
        echo "<td>".strtoupper($r->jurusansmta)."</td>";
        echo "<td>".strtoupper($r->jenissmta)."</td>";
        echo "<td>".strtoupper($r->nama_smta)."</td>";
        echo "<td>".$r->npsn_smta."</td>";
        echo "<td>".strtoupper($r->prov_smta)."</td>";
        echo "<td>".strtoupper($r->kab_smta)."</td>";
        echo "<td>".$r->nrapor1."</td>";
        echo "<td>".$r->nrapor2."</td>";
        echo "<td>".$r->nrapor3."</td>";
        echo "<td>".$r->nik_ayah."</td>";
        echo "<td>".strtoupper($r->nama_ayah)."</td>";
        echo "<td>".strtoupper($r->pekerjaan_ayah)."</td>";
        echo "<td>".strtoupper($r->pendidikan_ayah)."</td>";
        echo "<td>".strtoupper($r->alamatkantor_ayah)."</td>";
        echo "<td>".$r->nik_ibu."</td>";
        echo "<td>".strtoupper($r->nama_ibu)."</td>";
        echo "<td>".strtoupper($r->pekerjaan_ibu)."</td>";
        echo "<td>".strtoupper($r->pendidikan_ibu)."</td>";
        echo "<td>".$r->penghasilan_ortu."</td>";
        echo "<td>".strtoupper($r->provinsi_tempattinggalortu)."</td>";
        echo "<td>".strtoupper($r->kab_tempattinggalortu)."</td>";
        echo "<td>".strtoupper($r->kec_tempattinggalortu)."</td>";
        echo "<td>".strtoupper($r->alamat_ortu)."</td>";
        echo "<td>".$r->kodepost_tempattinggalortu."</td>";
        echo "<td>".$r->nohp_ortu."</td>";
        echo "<td>".strtoupper($r->nama_wali)."</td>";
        echo "<td>".strtoupper($r->pekerjaan_wali)."</td>";
        echo "<td>".strtoupper($r->penghasilan_wali)."</td>";
        echo "<td>".$r->nohp_wali."</td>";
        echo "<td>".strtoupper($r->alamat_wali)."</td>";
        echo "<td>".date("d-m-Y",$r->created_on)."</td>";
        echo "</tr>";
      }
    }else{ // Jika data tidak ada
      echo "<tr><td colspan='59'>Data tidak ada</td></tr>";
    }
    ?>
    </table>
  </body>
</html>