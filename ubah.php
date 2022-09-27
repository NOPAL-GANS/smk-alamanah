<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM db_staf WHERE id = $id")[0];



// Tombol sudah di tekan apa belum
if ( isset($_POST["submit"]) ) {
    
    // cek apakah data sudah berhasil diubah atau tidak
    if(ubah($_POST) > 0 ) {
        echo "
          <script>
               alert('Data Berhasil Di Ubah');
               document.location.href = 'index2.php'
          </script>
        ";
    } else {
        echo "
        <script>
             alert('Data Gagal Di Ubah!');
             document.location.href = 'index2.php'
        </script>
      ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah Data Mahasiswa</title>
    <style>
        body {
            background-color: lightgray;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    
   <h1>ubah Data Mahasiswa</h1>

   <form action="" method="post">
          <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
            <label for="no_telp">No.telp :</label>
                <input type="text" name="no_telp" id="nrp" value="<?= $mhs["no_telp"]; ?>">
            </li>
            <li>
            <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
            </li>
            <li>
            <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit" >ubah Data</button>
            </li>
        </ul>


   </form>


</body>
</html>