<!DOCTYPE HTML>
<html>
  <head>
    <title>Output Data</title>
  </head>
  <body style="text-align:center;">

  <?php
  $txt_file    = file_get_contents('db.html');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  echo '<p align=left><a href="input.php">Tambah Data </a></p></br></br>';
  $i=1;

  foreach($rows as $row => $data)
  {

    // Memisahkan Item Data dari Pemisah -, array pada PHP dimulaipada index ke-0
    $row_data = explode('-', $data);

    $info[$row]['nm_wilayah']         = $row_data[0];
    $info[$row]['jml_positif']        = $row_data[1];
    $info[$row]['jml_dirawat']        = $row_data[2];
    $info[$row]['jml_sembuh']         = $row_data[3];
    $info[$row]['jml_meninggal']      = $row_data[4];
    $info[$row]['nm_operator']        = $row_data[5];
    $info[$row]['nim']                = $row_data[6];

    // Mengambil data ke variabel baru
    $jml_positif    = $info[$row]['jml_positif'];
    $jml_dirawat    = $info[$row]['jml_dirawat'];
    $jml_sembuh     = $info[$row]['jml_sembuh'];
    $jml_meninggal  = $info[$row]['jml_meninggal'];
    $nm_operator    = $info[$row]['nm_operator'];
    $nim            = $info[$row]['nim'];


    // Menampilkan Data
    echo 'Data Pemantauan Covid19 Wilayah ' . $info[$row]['nm_wilayah'] . '<br>';
    date_default_timezone_set('Asia/Jakarta');
    echo "Per " . date("j F Y H:i:s") . "<br>";
    echo "$nm_operator / $nim ";
    echo "<br></br>";
    echo "<table align= center width = 700 border =1>
          <tr>
          <th> Positif </th>
          <th> Dirawat </th>
          <th> Sembuh </th>
          <th> Meninggal </th>
          </tr>

          <tr>
          <th> $jml_positif</th>
          <th> $jml_dirawat</th>
          <th> $jml_sembuh </th>
          <th> $jml_meninggal </th>
          </tr>
          </table>";
    echo "<br></br>";
    echo "<br></br>";
    echo "<hr>";
  }
  ?>

</body>
</html>