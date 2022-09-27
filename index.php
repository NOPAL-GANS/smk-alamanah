<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
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

.portfolio h3 {
   text-align: center;
}

.portfolio .satu {
    opacity: 0;
    transform: translate(0, -40px);
    transition: 0.5s;
}

.portfolio .satu.muncul {
    opacity: 1;
    transform: translate(0,0);
}


.p {
    text-align: center;
    padding-right: 7vh;
}

.satu p {
    color: #333;
}

.satu p:hover {
    color: antiquewhite;
    opacity: .9;
    transition: 1s;
}

.gambarp {
    width: 90%;
    border: 5px solid white;
}

.paragraf {
    float: right;
    margin-top: 30vh;
    font-size: 3vh;
}

.paragraf a {
    color: #333;
}

.paragraf a:hover {
    color: antiquewhite;
    opacity: .9;
    transition: 1s;
}

.contact {
    min-height: 800px;
}

footer {
   position: absolute;
   bottom: 0;
   width: 100%;
   height: 100px;
   background-color: #333;
}

footer p {
    color: #aaa;
    font-size: 1em;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 5px;
}

footer a {
    text-shadow: 100px solid white;
    color: aqua;
}
    </style>

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
     <section class="portfolio" >
          <div class="container" id="portfolio">
            <div class="row">
              <div class="col-lg-12">
                <h3>Profil Guru</h3>
                <hr>
                <br><br><br>
                 <div class="col-lg-3">
                    <a href="" class="satu" style="text-decoration: none;">
                      <img src="img/portfolio/1.jpg" class="gambarp">
                      <br><br>
                      <p class="p">Kakomp. Akuntansi &
                        <br>
                         Keuangan Lembaga
                         <br>
                         &nbsp<strong>DJULIATI</strong></p>
                    </a>
                 </div>
                 <div class="col-lg-3">
                  <a href="" class="satu" style="text-decoration: none;">
                    <img src="img/portfolio/2.jpg" class="gambarp">
                    <br><br>
                    <p class="p">Kaprog. Manajemen Perkantoran
                      <br>
                       ENDAH FINATARIANI, M.PD</p>
                  </a>
               </div>
               <div class="col-lg-3">
                <a href="" class="satu" style="text-decoration: none;">
                  <img src="img/portfolio/3.jpg" class="gambarp">
                  <br><br> 
                  <p class="p">&nbspKakomp. Perbankan
                    <br>
                    Syariah
                    <br>
                     HERNINTA DEFAYANTI, S.E.I</p>
                </a>
               </div>
               <div class="col-lg-3">
                <a href="" class="satu" style="text-decoration: none;">
                  <img src="img/portfolio/4.jpg" class="gambarp">
                  <br><br>
                  <p class="p">Kaprog. Manajemen Pemasaran
                    <br>
                     INDAYANI</p>
                </a>
                </div>
              </div>
           </div>
            
          <!--  -->

           <div class="row">
            <div class="col-lg-12">
               <br><br>
               <div class="col-lg-3">
                  <a href="" class="satu" style="text-decoration: none;">
                    <img src="img/portfolio/5.jpg" class="gambarp">
                    <br><br>
                    <p class="p">Kaprog. Teknik Komputer Dan Informatika
                      <br>
                       MUHAMAD MAWAHIB</p>
                  </a>
               </div>
               <div class="col-lg-3">
                <a href="" class="satu" style="text-decoration: none;">
                  <img src="img/portfolio/6.jpg" class="gambarp">
                  <br><br>
                  <p class="p">Kepala Sekolah
                    <br>
                    DRS. AHMAD MUHROJ</p>
                </a>
             </div>
             <div class="col-lg-3">
              <a href="" class="satu" style="text-decoration: none;">
                <img src="img/portfolio/7.jpg" class="gambarp">
                <br><br>
                <p class="p">Bendahara Umum
                  <br>
                  HUFRON BAIDLOWI</p>
              </a>
             </div>
             <div class="col-lg-3">
              <a href="" class="satu" style="text-decoration: none;">
                <img src="img/portfolio/8.jpg" class="gambarp">
                <br><br>
                <p class="p">Wakabid. Kurikulum
                  <br>
                  MASHURI, S.PD.</p>
              </a>
              </div>
            </div>
         </div>

         <!--  -->
         <div class="row">
          <div class="col-lg-12">
             <br><br>
             <div class="col-lg-3">
                <a href="" class="satu" style="text-decoration: none;">
                  <img src="img/portfolio/9.jpg" class="gambarp">
                  <br><br> 
                  <p class="p">Wakabid Kesiswaan
                    <br>
                    SAPTO SUDRATO</p>
                </a>
             </div>
             <div class="paragraf">
               <a href="form.php" style="text-decoration: none;"><p>Tambah Staff</p></a>
               <hr style="width: 18vh;">
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
            <form>

              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Masukan Email">
              </div>
              <div class="form-group">
                <label for="telp">No Telpon</label>
                <input type="tel" id="telp" class="form-control" placeholder="Masukan No Telp">
              </div>
              <select class="form-control">
                <option>--Pilih Kategori--</option>
                <option>Web Design</option>
                <option>Web Devlopment</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="Masukan Pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
     </section>
     <!-- akhir contact -->

     <!-- footer -->
     <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Copyright 2017 l built by. <a href="http://instagram.com/nopall_777">AhmadNaufal</a>.</p>
            <a href="http://youtube.com" class="btn btn-danger">subscribe</a>
          </div>
        </div>
      </div>
     </footer>
     <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>










