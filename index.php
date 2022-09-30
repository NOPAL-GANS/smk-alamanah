<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<<<<<<< HEAD
<<<<<<<< HEAD:index.php
    <title>smk-alamanah</title>

    <style>
     
=======
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
    <style>
      
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
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

<<<<<<< HEAD
.portfolio .thumbnail {
=======
.portfolio h3 {
   text-align: center;
}

.portfolio .satu {
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
    opacity: 0;
    transform: translate(0, -40px);
    transition: 0.5s;
}

<<<<<<< HEAD
.portfolio .thumbnail.muncul {
=======
.portfolio .satu.muncul {
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
    opacity: 1;
    transform: translate(0,0);
}

<<<<<<< HEAD
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


========
    <style media="screen">
  
body{
    background-color: #7aacff;
}
.slide{
    width: 500px;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    overflow: hidden;
    border: 10px solid #ffffff;
    border-radius: 8px;
    box-shadow: 10px 25px 30px rgba(0,0,0,0.3);
}
.wrapper{
    width: 100%;
    display: flex;
    animation: slide 16s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
img{
    width: 100%;
}
    </style>
    <title>SMK-ALAMANAH</title>
>>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74:index.html

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
=======

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
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74

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
<<<<<<< HEAD
          <a href="#home" class="navbar-brand page-scroll">SMK AL AMANAH</a>
=======
          <a href="#home" class="navbar-brand page-scroll">My Web</a>
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
        </div>

       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
<<<<<<< HEAD
            <li><a href="#about" class="page-scroll">Kejuruan</a></li>
            <li><a href="#portfolio" class="page-scroll">Profil staff</a></li>
=======
            <li><a href="siswa.php">tambah siswa</a></li>
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
            <li><a href="#contact" class="page-scroll">Contact</a></li>
          </ul>
       </div>
      </div>
    </nav>
     <!-- akhir navbar -->

     <!-- jumbotron -->
<<<<<<< HEAD
    <div id="carouselExampleSlidesOnly" class="col-lg-12">
      <div class="carrousel-inner">
        <div class="">
          <div class="row" class="slide">
              <div class="wrapper">
                  <img src="img/portfolio/UCAPAN-DIRGAHAYAU-SMK-AL-AMANAH-WEBSITE.png">
                  <img src="img/portfolio/band.jpg">
                  <img src="img/portfolio/paskib.jpg">
                  <img src="img/portfolio/pbs.jpg">
              </div>
          </div>
        </div>
      </div>
    </div>
=======
     <div class="jumbotron text-center">
        <img src="./img/pt.jfif" class="img-circle"> 
        <h1 style="color: bisque;">My Web</h1>
        <p style="color: bisque;">Gallery l Image l Nature</p>
     </div>
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
        
     <!-- akhir jumbotron -->



<<<<<<< HEAD
     <!-- jurusan -->
  <section class="about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <div class="col-lg-4">
          <img src="img/jurusan/rpl.png" class="jurusan">
          <h4>Rekayasa Perangkat Lunak</h4>
          <br>
          <p class="href2">Rekayasa perangkat lunak adalah salah satu bidang keilmuan atau profesi yang berfokus pada produksi dan pengembangan perangkat lunak. Rekayasa perangkat lunak dalam bahasa Inggris dikenal dengan istilah software engineering</p>
          <br>
          <a href="index2.html" class="href"><p>Baca Selengkapnya</p></a>

        </div>
        <div class="col-lg-4">
          <img src="img/jurusan/otkp.png" class="jurusan">
          <h4>Otomatisasi & Tata Kelola Perkantoran</h4>
          <br>
          <p class="href2">Otomatisasi dan Tata Kelola Perkantoran adalah kompetensi keahlian pada Program Keahlian Manajemen Perkantoran yang menekankan pada keterampilan pengelolaan administrasi kepegawaian, keuangan, sarana prasarana serta humas dan keprotokolan</p>
          <br>
          <a href="index3.html" class="href"><p>Baca Selengkapnya</p></a>
        </div>
        <div class="col-lg-4">
          <img src="img/jurusan/bdp.png" class="jurusan">
          <h4>BIsnis Daring & Pemasaran</h4>
          <br>
          <p class="href2">Bisnis daring dan pemasaran adalah sebuah kompetensi keahlian pada bidang Sekolah Menengah Kejuruan Bisnis dan Manajemen yang mempelajari keilmuan dan praktik tentang bidang pemasaran dan pengembangan bisnis online melalui berbagai media, mulai media offline sampai dengan media Online</p>
          <br>
          <a href="index4.html" class="href"><p>Baca Selengkapnya</p></a>

        </div>
        <div class="col-lg-6">
          <img src="img/jurusan/akuntansi.png" class="img">
          <h4>Akuntasi & Keuangan Lembaga</h4>
          <br>
          <p class="href2">Menghasilkan lulusan untuk menjadi tenaga kerja akuntansi tingkat menengah yang mumpuni, sanggup mengerjakan pembukuan keuangan di perusahaan kecil maupun Nasional dan siap untuk mengembangkan sikap professional yang sesuai dengan tuntutan dunia usaha dunia industri.</p>
          <br>
          <a href="index5.html" class="href"><p>Baca Selengkapnya</p></a>

        </div>
        <div class="col-lg-6">
          <img src="img/jurusan/perbankan.png" class="img">
          <h4>Perbankan Syariah</h4>
          <br>
          <p class="href2">Kompetensi Keahlian ini mempelajari bagaimana menganalisa dan membuat pembukuan keuangan suatu badan usaha, membuat deskripsi dan melakukan interpretasi terhadap permasalahan akuntansi, dan mampu menerapkannya dalam dunia perbankan</p>
          <br>
          <a href="index6.html" class="href"><p>Baca Selengkapnya</p></a>

        </div>
        </div>
      </div>
    </div>
  </section>
     <!-- akhir jurusan -->


     <!-- portfolio -->
     <section class="portfolio" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3>Portfolio</h3>
=======
     <!-- about -->
     <section class="about" id="about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">About</h2>
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
              <hr>
            </div>
          </div>

<<<<<<< HEAD

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
=======
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
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
            </div>
          </div>
        </div>
     </section>
<<<<<<< HEAD
=======
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
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
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
<<<<<<< HEAD
        
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
=======

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
>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
     </section>
<<<<<<< HEAD

     
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
                <li><a href=""><p>Instagram</p></a></li>
                <hr>
                <li><a href=""><p>Youtube</p></a></li>
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
=======
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

>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>



<<<<<<< HEAD
=======







>>>>>>> 8cd527dfb5bb5979079044aea6b872837cce9c74
