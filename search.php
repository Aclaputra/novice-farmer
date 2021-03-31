<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Search</title>
</head>

<body>
  <form action="search.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
  </form>
</body>

</html>

<?php
  include "../config/koneksi_anna.php";
  

  if (isset($_GET['cari'])) {
    $cari = $_GET["cari"];
    echo "<b>Hasil pencarian : " .$cari. "</b>";
  }
?>

  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
    </tr>
    <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = pg_query("select * from calon_mahasiswa where cln_nama like '%".$cari."%'");				
	}else{
		$data = pg_query("select * from calon_mahasiswa");		
	}
	$no = 1;
	while($d = pg_fetch_array($data)){
	?>
    <tr>
      <td>
        <?php echo $no++; ?>
      </td>
      <td>
        <?php echo $d['cln_nama']; ?>
      </td>
    </tr>
    <?php } ?>
  </table>