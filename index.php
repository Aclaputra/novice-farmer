<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ANNA Home Page</title>
  <link rel="shortcut icon" type="image/png" href="img/harvest2.png"/>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
  <header class="sticky">
    <a href="#" class="logo">ANNA</a>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="viewboard.php">ViewBoard</a></li>
      <li><a href="challenge.php" style="color: #7eca9c; text-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">Challenge</a></li>
      <li><a href="#">ADT</a></li>
    </ul>
  </header>
  <section class="banner">
    <div class="banner-img-container">
      <div class="banner-text">
        <h1>WELCOME TO ANNA HOMEPAGE !</h1>
        <p>
          Hello i'm Anna,
          <br> Mother of Marie and an excellent baker. My favorite hobby is gossiping with the other ladies in town, hehe.
          <br><br> But don't worry i will help you if you need something.
        </p>
        <div class="banner-buttons">
          <a href="challenge.php"><button><h3>Selengkapnya</h3></button></a>
          <a href="https://simbad.alphabetincubator.id/files/si138b.html"><button><h3>SI138B Class</h3></button></a>
        </div>
      </div>
      <img class="gambarAnna" src="img/anna.png" />

    </div>
  </section>

  <!--   <div class="main">
    
    <div class="main-container">
      <img class="main-img" src="img/harvest2.png"/>
      <h1>
      Main
    </h1>
    </div>
  </div> -->

  <div class="footer">
    <div class="footer-container" style="max-width: 80%; margin: 0 auto;">
      <h1>
        WHAT WE HAVE BUILT?
      </h1>
      <img src="img/novice_farmer1.JPG" class="img-novice" onclick="location.href='challenge.php';" style="cursor: pointer;"/>
      <h3>
        1. Challenge Novice Farmer #1
      </h3>
      <p style="max-width: 50%; text-align: center; margin: 0 auto;">
       Membuat Aplikasi Penerimaan Mahasiswa Baru (PMB) & menampilkan tabel calon_mahasiswa secara dinamis melalui database menggunakan bahasa pemrograman PHP sebagai server-side dan Bootstrap v.5 sebagai Library UI yang efisien.
      </p>
    </div>
  </div>
  
  <p style="bottom: 0; color: gray; text-align: center; margin-top: 100px;">
    Copyright © 2021 - Anna
  </p>

  <script type="text/javascript" src="javascript/index.js"></script>
</body>

</html>