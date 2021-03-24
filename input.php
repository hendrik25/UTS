<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pemantaun Covid19</title>
</head>
<body>
<h2 align="center">Input Data</h2>
<hr>

<form name="form1" method="post" action="simpan.php">
    <table width="500" border="0" align="center"  >
      <tr>
        <td width="250">Nama Wilayah</td>
        <td width="530">
            <select name="nm_wilayah" type="text" id="nm_wilayah">
                <option>Pilih Wilayah</option>
                <option>DKI Jakarta</option>
                <option>Banten</option>
                <option>Jawa Barat</option>
                <option>Jawa Tengah</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Jumlah Positif</td>
        <td><input size="40" name="jml_positif" type="number" id="jml_positif" required></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td><input size="40" name="jml_dirawat" type="number" id="jml_dirawat" required></td>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td><input size="40" name="jml_sembuh" type="number" id="jml_sembuh" required></td>
      </tr>
      <tr>
        <td>Jumlah Meninggal</td>
        <td><input size="40" name="jml_meninggal" type="number" id="jml_meninggal" required></td>
      </tr>
      <tr>
        <td>Nama Operator</td>
        <td><input size="30" name="nm_operator" type="text" id="nm_operator" required></td>
      </tr>
      <tr>
        <td>Nim Mahasiswa</td>
        <td><input size="30" name="nim" type="text" id="number" required></td>
      </tr>
      <tr>
        <td></td>
        <td>
        <input name="Submit" type="submit" value="Simpan">
        <a href="output.php">Lihat Data</a>
        
        </td>
      </tr>
    </table>
    </form>

</body>
</html>