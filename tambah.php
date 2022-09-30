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
      border: 2px solid blue;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
    }
    button {
        padding: 2vh;
        margin-right: 40vh;
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

            <h1 style="text-align: center;">Tambah Data Staff</h1>
            <hr style="width: 30%;">
            <br>
            <center><form action="" method="post">
                    <ul>
                        <li style="list-style:none;">
                            <label for="nama">Nama :&nbsp;&nbsp;</label>
                            <input type="text" name="nama" id="nama" required placeholder="Masukan Nama">
                        </li>
                        <br>
                        <li style="list-style:none;">
                        <label for="no_telp">No.telp :&nbsp;</label>
                            <input type="text" name="no_telp" id="no_telp" required placeholder="Masukan No.telp">
                        </li>
                        <br>
                        <li style="list-style:none;">
                        <label for="email">Email :&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="email" id="email" required placeholder="Masukan Email">
                        </li>
                        <br>
                        <li style="list-style:none;">
                        <label for="gambar">Gambar :</label>
                            <input type="text" name="gambar" id="gambar" required placeholder="Masukan Nama Gambar">
                        </li>
                        <br>
                        <li style="list-style:none;">
                            <button type="submit" name="submit">Tambah Data</button>
                        </li></center> 


            </form>
    </div>

</body>
</html>