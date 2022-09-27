<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <style>
     
html {
    position: relative;
}

body {
    margin-bottom: 100px;
    margin-top: 50px;
}

.jumbotron {
    height: 400px;
    background-image: url(./img/oo.jfif);
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    overflow: hidden;
}

.jumbotron img {
    width: 200px;
    border: 5px solid white;
    box-shadow: 1px 1px 10px bisque;
}

h1 {
 font-weight: bold;
}

h2 {
    font-weight: bold;
}

h3 {
    font-weight: bold;
}

h4 {
    font-weight: bold;
}
.jumbotron{
    background-color: lightslategray;
}

hr {
    width: 250px;
    border-top: 4px solid #333;
}

section {
    min-height: 600px;
}

.row p {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: bolder;
}

.pKiri, .pKanan {
    opacity: 0;
    transform: translate(-50px, 0);
    transition: 1s;
}

.pKanan {
    transform: translate(50px, 0);
}

.pKiri.pMuncul, .pKanan.pMuncul {
    opacity: 1;
    transform: translate(0,0);
}


.portfolio {
   background-color: lightslategray;
}

.portfolio .thumbnail {
    opacity: 0;
    transform: translate(0, -40px);
    transition: 0.5s;
}

.portfolio .thumbnail.muncul {
    opacity: 1;
    transform: translate(0,0);
}

.contact {
    min-height: 800px;
    
}

.h3 {
    margin-left: 6vh;
    margin-top: -1%;
    color: bisque;
}

#t1 img {
   border: 2px solid bisque;
}

#footer {
    background-color: gray;
    width: 100%;
    padding-top: 15px;
}      

    </style>



    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#home" class="navbar-brand page-scroll">My Web</a>
        </div>

       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
       </div>
      </div>
    </nav>
     <!-- akhir navbar -->

     <!-- jumbotron -->
     <div class="jumbotron text-center">
        <img src="./img/pt.jfif" class="img-circle"> 
        <h1 style="color: bisque;">My Web</h1>
        <p style="color: bisque;">Gallery l Image l Nature</p>
     </div>
        
     <!-- akhir jumbotron -->



     <!-- about -->
     <section class="about" id="about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">About</h2>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
              <p class="pKiri">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Tempore fugit accusantium nulla rerum nobis architecto alias maiores, 
                adipisci quas ullam ad facilis illum laboriosam ut soluta numquam ex est quibusdam?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et corporis 
                sunt quidem voluptas, necessitatibus tempora unde repellat ad vitae</p>
           </div>
             <div class="col-sm-5">
              <p class="pKanan">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Tempore fugit accusantium nulla rerum nobis architecto alias maiores, 
                adipisci quas ullam ad facilis illum laboriosam ut soluta numquam ex est quibusdam?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et corporis 
                sunt quidem voluptas, necessitatibus tempora unde repellat ad vitae</p>
            </div>
          </div>
        </div>
     </section>
     <!-- akhir about -->


     <!-- portfolio -->
     <section class="portfolio" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3>Portfolio</h3>
              <hr>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-4">
              <a href="" class="thumbnail">
              <img src="img/portfolio/1.jpg">
              </a>
            </div>
            <div class="col-xs-4">
              <a href="" class="thumbnail">
                <img src="img/portfolio/2.jpg">
              </a>
            </div>
            <div class="col-xs-4">
              <a href="" class="thumbnail">
                <img src="img/portfolio/3.jpg">
              </a>
            </div>
            <div class="col-xs-4">
              <a href="" class="thumbnail">
                <img src="img/portfolio/4.jfif">
              </a>
            </div>
            <div class="col-xs-4">
              <a href="" class="thumbnail">
                <img src="img/portfolio/5.jfif">
              </a>
            </div>
            <div class="col-xs-4">
              <a href="" class="thumbnail">
                <img src="img/portfolio/6.jfif">
              </a>
            </div>
          </div>


        </div>
     </section>
     <!-- akhir portfolio -->

     <!-- contact -->
     <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h4>Contact</h4>
            <hr>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form method="post" action="value.php">

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email">
              </div>
              <div class="form-group">
                <label for="telp">No Telpon</label>
                <input type="tel" name="telp" class="form-control" placeholder="Masukan No Telp">
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" name="pesan" placeholder="Masukan Pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
     </section>

     
     <!-- akhir contact -->





     
    <div class="container" id="footer">
      <div class="row" id="t1" >
        <div class="col-lg-12">
           <div class="col-lg-4">
            <iframe width="380" height="220" src="https://www.youtube.com/embed/KQqxVa-RQAQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="yt"></iframe>
           </div>
           <div class="col-lg-4">
             <h3 class="h3">Berita Terbaru</h3>
            <hr>
           <ul>
            <li style="list-style:none;"><img src="img/portfolio/nabi-isa-as-45x45.jpg" alt=""><a href="">NABI ISA A.S SERIAL KISAH NABI & RASUL</a></li>
            <hr>
            <li style="list-style:none;"><img src="img/portfolio/juara-provinsi-45x45.jpg" alt=""><a href="">NABI ISA A.S SERIAL KISAH NABI & RASUL</a></li>
            <hr>
            <li style="list-style: none;"><img src="img/portfolio/Pengumuman-Masuk-Sekolah-45x45.jpg" alt=""><a href="">NABI ISA A.S SERIAL KISAH NABI & RASUL</a></li>
            <hr>
           </ul>
           </div>
           <div class="col-lg-4">
             <h3 class="h3">Media Sosial</h3>
              <hr>
              <br>
              <ul>
                <li><a href=""><p>instagram</p></a></li>
                <hr>
                <li><a href=""><p>youtube</p></a></li>
                <hr>
                <li><a href=""><p>Web Pendaftaran</p></a></li>
                <hr>
              </ul>
           </div>
        </div> 
      </div>

      <div class="row">
        <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.371806999667!2d106.7025322!3d-6.3496232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63adc39be99da7de!2sSekolah%20Menengah%20Kejuruan%20Al%20Amanah!5e0!3m2!1sid!2sid!4v1663836569148!5m2!1sid!2sid" width="400" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="white white-dark">
      <p>ㅤㅤCopyright &copy; 2022 SMK Al Amanah Kota Tangerang Selatan</p>


    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>



