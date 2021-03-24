<?php 
        if (isset($_POST['wilayah'])) {
        $nama_wil   = $_POST['wilayah'];
        $jml_pos    = $_POST["Positif"];
        $jml_rwt    = $_POST["Dirawat"];
        $jml_smbh   = $_POST["Sembuh"];
        $jml_mnggl  = $_POST["Meninggal"];
        $nama       = $_POST["Nama"];
        $nim        = $_POST["NIM"];

        echo '<br>' . '<br>';
        echo '<center>';
        // Menampilkan Data
        echo 'Data Pemantauan Covid19 Wilayah ' . $_POST['wilayah'] . '<br>';
        date_default_timezone_set('Asia/Jakarta');
        echo "Per " . date("d F Y H:i:s") . "<br>";
        echo "$nama / $nim ";
        echo "<br></br>";
        echo '</center>';
        echo "<table align= center width = 500 border =1>
            <tr>
            <th> Positif </th>
            <th> Dirawat </th>
            <th> Sembuh </th>
            <th> Meninggal </th>
            </tr>

            <tr>
            <th> $jml_pos</th>
            <th> $jml_rwt</th>
            <th> $jml_smbh </th>
            <th> $jml_mnggl </th>
            </tr>
            </table>";
        echo "<br></br>";
        echo "<br></br>";
        echo "<hr>";
    }
        ?>