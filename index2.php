<?php
require 'functions.php';
$staf = query("SELECT * FROM db_staf");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Staff</title>
    <style>
       body {
        background-color: lightslategray;
        height: auto;
       }
       h1 {
        text-align: center;
       }
       .container {
      padding: 20px;
      width: 90%;
      height: auto;
    }
       table {
        margin-left: 24%;
        border: 1px solid black;
       }
       .tambah {
        color: black;
        font-weight: bolder;
       }
       .tambah:hover {
         background-color: salmon;
         opacity: .7;
         transition: 3s;
       }
       button:hover {
        background-color: lightskyblue;
        color: lightskyblue;
       }
    </style>
</head>
<body>
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-3">
                  <h1>Daftar Staff</h1>

                    <a href="tambah.php" class="tambah">Tambah Data Staff</a>
                    <br>
                    <br>
             <div class="row">
               <div class="col-lg-12">
                 <div class="col-lg-3">    
                    <table border="1" cellpadding="10" cellspacing="0">
                            <tr>
                              <th>NO.</th>
                              <th>Aksi</th>
                              <th>Gambar</th>
                              <th>Nama</th>
                              <th>no_telp</th>
                              <th>Email</th>
                              <th>Nama Gambar</th>
                            </tr>
                            
                            <?php $i = 1; ?>
                            <?php foreach( $staf as $row ) : ?>
                            <tr>
                              <td><?= $i; ?></td>
                              <td>
                                  <button><a href="ubah.php?id=<?= $row["id"]; ?>"   style="text-decoration: none;">ubah</a></button> |
                                  <button><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')"    style="text-decoration: none;">hapus</a>
                              </td>
                              <td><img src="imgface/<?= $row["gambar"]; ?>" width="50"></td>
                              <td><?= $row["nama"]; ?></td>
                              <td><?= $row["no_telp"]; ?></td>
                              <td><?= $row["email"]; ?></td>
                              <td><?= $row["gambar"]; ?></td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?> 
                    </table> 
                  </div>
                  </div>
                </div>                   
              </div>   
           </div>
        </div>
     </div>       
</body>
</html>