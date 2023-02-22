<!DOCTYPE html>
<html lang="en">
<head>
  <title>CETAK HASIL IDENTIFIKASI</title>
   <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body>
   <style type="text/css">
    /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } */

    @page {
      size: portrait;
      margin: 90px;
    }



    .kop-surat{
      font-family: serif;
      font-style: bold;
    }
  </style>
</head>

<body>

  <div class="text-center">
    <h4><strong>CETAK HASIL IDENTIFIKASI</strong></h4>
    <h5><strong>IDENTIFIKASI PENYAKIT PADA TANAMAN TOMAT</strong></h5>
  </div>

     <table class="table">
      <tr>
        <td width="300px">Tanggal Identifikasi</td>
        <td>: {{$pasien->tanggal }}</td>
      </tr>

      <tr>
        <td>Keakuratan</td>
        <td>: {{$pasien->akumulasi_cf }}</td>
      </tr>

      <tr>
        <td>Persentase</td>
        <td>: {{$pasien->persentase }}%</td>
      </tr>

      <tr>
        <td>Diagnosa Penyakit</td>
        <td>: {{$pasien->penyakit->name }}</td>
      </tr>
    </table>

    <p><b>Deskripsi</b></p>
    <p>{!!$pasien->penyakit->desc!!}</p>
<br><br>
    <p><b>Penanganan</b></p>
    <p>{!!$pasien->penyakit->penanganan!!}</p>

  <script>
    window.print()
  </script>
</body>

</html>