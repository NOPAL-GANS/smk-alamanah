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
      width: 90%;
      height: auto;
    }
       table {
        border: 1px solid black;
       }
       .tambah {
        padding: 1.5vh;
        border: 1px solid aqua;
        text-decoration: none;
        background-color: bisque;
        color: black;
        font-family: georgia;
        font-weight: 300;
       }
       .tambah:hover {
         background-color: salmon;
         color: aqua;
         opacity: .5;
         transition: 1s;
       }
       button {
        padding: 1vh;
        border: 2px solid lightskyblue;
        cursor: pointer;
        color: black;
        background-color: gray;
        font-family: georgia;
       }
       button:hover {
        color: aqua;
        background-color: whitesmoke;
        opacity: .7;
        transition: 1s;
       }
    </style>
</head>
<body>
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                  <h1>Daftar Staff</h1>
                  <br>

                    <br>
                    <br>  
                    <center><table border="1" cellpadding="10" cellspacing="0">
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
                                  <button><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah benar ingin di hapus?')"    style="text-decoration: none;">hapus</a>
                              </td>
                              <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
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
     <br>
     <a href="tambah.php" class="tambah"  style="float: right;" >Tambah Data Staff</a>    <a href="index.php" class="tambah"  style="float: left;" >Kembali</a>    
</body>
</html>