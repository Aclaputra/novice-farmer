<!-- M Acla Alamsyah Putra -->
<?php
 include "../../config/koneksi_anna.php";

// Get id
$cln_id = $_GET['id'];

 $query_pg = "DELETE FROM calon_mahasiswa WHERE cln_id=$cln_id";
                      
 $result = pg_query($query_pg);

header("Location: ../index.php");
?>