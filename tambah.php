<?php
require 'functions.php';
// Tombol sudah di tekan apa belum
if ( isset($_POST["submit"]) ) {
    
    // cek apakah data sudah berhasil ditambahkan atau tidak
    if(tambah($_POST) > 0 ) {
        echo "
          <script>
               alert('Data Berhasil Di Tambahkan');
               document.location.href = 'index2.php'
          </script>
        ";
    } else {
        echo "
        <script>
             alert('Data Gagal Di Tambahkan');
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
    <title>Tambah Data Staff</title>
    <style>
    
    body {
      background-color: lightslategray;
    }
 
    /* Style all input fields */
    input {
      width: 70vh;
      padding: 12px;
      border: 1px solid lightblue;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
    }
    
    </style>
</head>
<body>
    
   <h1>Tambah Data Staff</h1>

   <form action="" method="post">
        <ul>
            <li style="list-style:none;">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
            <label for="no_telp">No.telp :</label>
                <input type="text" name="no_telp" id="no_telp">
            </li>
            <li>
            <label for="email">Email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
            <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>


   </form>


</body>
</html>