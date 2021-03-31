<!-- Fifin Alfiana -->
<?php
 
    // INI ADALAH FILE KONEKSI DILARANG KERAS UNTUK MENGHAPUS BARIS KODE DIBAWAH INI
	  include "../config/koneksi_anna.php";

    
    $query_pg = "SELECT * FROM calon_mahasiswa ORDER BY cln_id ASC";

// DROP TABLE calon_mahasiswa
// SELECT * FROM calon_mahasiswa ORDER BY cln_id ASC
// CREATE TABLE calon_mahasiswa (
//        cln_id SERIAL PRIMARY KEY,
//        cln_nama VARCHAR(50),
//        cln_no BIGINT,
//        cln_email VARCHAR(50)
//        );

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
                <span class="navbar-brand mb-0 h1 text-light">Challenge #1</span>
      </div>
    </nav>

    <br>

    <div class="section-header">
      <h1 class="text-center text-light" style="margin-top: 60px;">PMB</h1>
      <p class="text-center text-light">Penerimaan Mahasiswa Baru</p>
    </div>

    <!--   gambar logo Tim Anna -->
    <!--   <div class="text-center m-2">
     <img src="https://lh3.googleusercontent.com/-2GGW7jGRk8U/YCoPDXWkNRI/AAAAAAAAsxA/Z1mi-Hf5r2UosCOzOOKrHfJe5u9oHMnGQCK8BGAsYHg/s0/2021-02-14.jpg" class="img-fluid rounded-circle shadow-lg" alt="...">
  </div> -->
    <!--  button insert calon mahasiswa -->
    <!--   <div class="container d-flex justify-content-center">
      <a href="./CRUD/add_siswa.php"><button class="btn btn-primary m-2 p-2 px-4 shadow-lg rounded-pill">Add Calon Mahasiswa</button></a>
  </div> -->
    <br>

    <div class="container">

      <div class="container mt-4">
        <div class="jumbotron shadow">
          <div class="card">
            <div class="card-header">
              Database Tables
            </div>
            <div class="card-body">

              <!--   table 1 -->


              <h4 class="m-3 text-dark">Table Data Calon mahasiswa</h4>
              <table class="table table-primary shadow-lg p-3 m-4">
                <thead>
                  <tr>
                    <th scope="col">Nama Kolom</th>
                    <th scope="col">Tipe Data</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>cln_id</td>
                    <td>integer</td>
                  </tr>
                  <tr>
                    <td>cln_nama</td>
                    <td>character varying</td>
                  </tr>
                  <tr>
                    <td>cln_no</td>
                    <td>integer</td>
                  </tr>
                  <tr>
                    <td>cln_email</td>
                    <td>character varying</td>
                  </tr>
                </tbody>
              </table>

              <!--   table 2 -->

              <h4 class="m-3 text-dark">User Data</h4>

              <table class="table table-primary shadow-lg p-3 m-4">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Email</th>
                    <!--                           <th scope="col"></th> -->


                  </tr>
                </thead>
                <tbody>

                  <!--                           <tr>
                          <th>Halo</th>
                          <td>Halo 2</td>
                          <td>Halo 3</td>
                          <td>Halo 4</td>
                            
                          <td><a href="./CRUD/update_siswa.php"><button class="btn btn-primary shadow rounded-pill px-4">Update<svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></button></a></td>
                          <td><a href="./CRUD/delete_siswa.php"><button class="btn btn-danger shadow rounded-pill px-4">Delete<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></button></a></td>
                            
                          </tr> -->

                  <!--                         Siti risma -->
                  <?php
                              
                        
                            while($siswa_data = pg_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>".$siswa_data['cln_id']."</td>";
                                
                                echo "<td>".$siswa_data['cln_nama']."</td>";
                                echo "<td>".$siswa_data['cln_no']."</td>";
                                echo "<td>".$siswa_data['cln_email']."</td>";
                               
                                echo "</tr>";
                                
                            }
//                            untuk edit dan delete data
//                                echo "<td>
//                                     <a href='update_siswa.php?id= $siswa_data[cln_id]'>Edit</a>
//                                     <a href='./CRUD/delete_siswa.php?id=$siswa_data[cln_id]'>Delete</a>
//                                     </td>";
                        ?>

                </tbody>
              </table>
              <!--                 Note: Challenge 1-3 done -->
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
    <?php 
   
//     $createtb = "CREATE TABLE calon_mahasiswa (
//       cln_id SERIAL PRIMARY KEY,
//       cln_nama VARCHAR(30),
//       cln_no INTEGER(20),
//       cln_email VARCHAR(30)
//     );";
  
  
                              
  
    //SYNTAX UNTUK MENIMBULKAN ERROR (DILARANG UNTUK MENGHAPUS)
  
//     Adinur subarkah
//     if ($result) {
//     echo "SELAMAT KAMU BERHASIL ANNA";
//     }elseif(!$result){
//     die("Error in SQL query: " . pg_last_error());
//     }else{
//         echo "BELUM BERHASIL";
//     }
    
    ?>

  </body>

  </html>