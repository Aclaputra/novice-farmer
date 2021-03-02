<?php
 include "../../config/koneksi_anna.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="text-dark" style="background-color: #28527a">
  
<!--   nav bar -->
<!--   <nav class="navbar bg-dark shadow-lg fixed-top">
    
     <div class="container-fluid">
          <a href="http://www.github.com/aclaputra" style="text-decoration: none;"><span class="navbar-brand mb-0 h1 text-light"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="16"       fill="currentColor" class="bi bi-stack text-primary mb-1" viewBox="0 0 16 16">
  <path d="M14.12 10.163l1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
  <path d="M14.12 6.576l1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
</svg>ANNA</span></a>   
     </div>
  </nav> -->
  
  
  <div class="container" style="margin-top: 80px; width: 40%;" >
    <h1 class="text-center text-light"></h1>
    <p class="text-center text-light mb-4"></p>
      <div class="card  shadow-lg">
           <div class="card-header">
              <h1 class="text-center">FORM PMB</h1>
             <p class="text-center">Insert Data calon mahasiswa:</p>
           </div>
           <div class="card-body">
              <h5 class="card-title text-center text-muted"></h5>
              <p class="card-text"></p>
             
             
             
<!--             Iqbal desam girinzio  -->
         <!-- Form -->
             <form class="m-auto" style="width: 80%;" action="add_siswa.php" method="post" name="form1">
              <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label">Nama:</label>
                
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Calon Mahasiswa" name="nama">
              </div>
               
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomor HP:</label>
                
                <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone" name="nohp">
              </div>
               
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Rinfo" name="email">
              </div>
               
               <input class="btn btn-primary m-2 p-2 px-4 shadow-lg rounded-pill m-auto" type="submit" name="submit" value="Submit Here">
            </form>
             
             
             
             
           </div>
        
<!--         Randika Dafa -->
        <?php
           if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $no = $_POST['nohp'];
            $email = $_POST['email'];
             
            $query_pg = "INSERT INTO calon_mahasiswa(cln_nama,cln_no,cln_email) VALUES('$nama','$no','$email')";
             
             
           $result = pg_query($query_pg);
           echo "<p class='text-center'>Siswa Added Successfully.</p> <a href='../index.php' class='text-center'>View Siswa</a>";
           
           }
        ?>
        
       <div class="card-footer text-muted">
           <div class="inner mt-4">
               <div class="small text-center text-dark">Copyright © 2021 - Anna</div>
           </div>
       </div>
      </div>
    
  </div>

  </div>
</div>
   

</body>
</html>

