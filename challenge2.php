<?php
    // INI ADALAH FILE KONEKSI DILARANG KERAS UNTUK MENGHAPUS BARIS KODE DIBAWAH INI
	  include "../config/koneksi_anna.php";
    $query_pg = "SELECT * FROM calon_mahasiswa ORDER BY cln_id ASC";
    //SYNTAX PHP UNTUK MENAMPILKAN HASIL DARI QUERY SQL YANG DITULISKAN (DILARANG UNTUK MENGHAPUS)
    $result = pg_query($query_pg);
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="img/harvest2.png" />
    <title>SIMBAD SI138B - ANNA</title>
  </head>

  <body class="text-dark" style="background-color: #28527a">

    <!--   navbar -->
    <nav class="navbar bg-dark shadow-lg fixed-top">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="16"       fill="currentColor" class="bi bi-stack text-primary mb-1" viewBox="0 0 16 16">
    <path d="M14.12 10.163l1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
    <path d="M14.12 6.576l1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
  </svg>ANNA</span>
        <span class="navbar-brand mb-0 h1 text-light">Challenge #2</span>
      </div>
    </nav>
    <br>
    <div class="section-header">
      <h1 class="text-center text-light" style="margin-top: 60px;">PMB</h1>
      <p class="text-center text-light">Penerimaan Mahasiswa Baru</p>
    </div>
    <br>
    <div class="container">

      <div class="container mt-4">
        <div class="jumbotron shadow">
          <div class="card">
            <div class="card-header">
              Database Tables
            </div>
            <div class="card-body">
              <!-- Form SEARCH input -->
              <div class="mx-4" style="width: 50%;">
                <form action="challenge2.php" method="get">
                  <label for="exampleInputEmail1" class="form-label">Search Name: </label>
                  <div class="d-flex">
                    <input type="text" class="form-control" name="cari" style="width: 50%;">
                    <input type="submit" class="btn btn-primary mx-2" value="Cari">
                  </div>
                </form>
              </div>
              <!--   table 1 -->
              <table class="table table-primary shadow-lg p-3 m-4">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
//                   Test hasil pencarian
//                               if (isset($_GET['cari'])) {
//                                 $cari = $_GET["cari"];
//                                 echo "<b>Hasil pencarian : " .$cari. "</b>";
//                               }
                              if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $data = pg_query("select * from calon_mahasiswa where cln_nama like '%".$cari."%'");				
                              }else{
                                $data = pg_query("select * from calon_mahasiswa");		
                              }
                              $no = 1;
                              while($d = pg_fetch_array($data)){
                                echo "<tr>";
                                echo "<td>".$d['cln_id']."</td>";
                                
                                echo "<td>".$d['cln_nama']."</td>";
                                echo "<td>".$d['cln_no']."</td>";
                                echo "<td>".$d['cln_email']."</td>";
                                echo "</tr>";
                            }
                        ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="mastfoot mt-auto ">
      <div class="inner m-4">
        <div class="small text-center text-dark">Copyright © 2021 - Anna</div>
      </div>
    </footer>
  </body>

  </html>

  <?php
  
?>