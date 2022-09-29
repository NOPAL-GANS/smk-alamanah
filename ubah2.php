<?php
require 'functions2.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$ssw = query("SELECT * FROM db_siswa WHERE id = $id")[0];



// Tombol sudah di tekan apa belum
if ( isset($_POST["submit"]) ) {
    
    // cek apakah data sudah berhasil diubah atau tidak
    if(ubah($_POST) > 0 ) {
        echo "
          <script>
               alert('Data Berhasil Di Ubah');
               document.location.href = 'siswa.php'
          </script>
        ";
    } else {
        echo "
        <script>
             alert('Data Gagal Di Ubah!');
             document.location.href = 'siswa.php'
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
            background-color: lightslategray;
        }
        h1 {
            text-align: center;
        }
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
    
   <h1>Ubah Data Siswa</h1>
   <br>
   <center><form action="" method="post">
          <input type="hidden" name="id" value="<?= $ssw["id"]; ?>">
        <ul>
            <li style="list-style:none;">
                <label for="nama">Nama :&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama" required value="<?= $ssw["nama"]; ?>">
            </li>
            <li style="list-style:none;">
            <label for="jurus">Jurusan :&nbsp;&nbsp;</label>
                <input type="text" name="jurusan" id="jurusan" required placeholder="Masukan Nama Jurusan" value="<?= $ssw["jurusan"]; ?>">
            </li>
            <li style="list-style:none;">
            <label for="email">Email :&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="email" id="email" required placeholder="Masukan Email" value="<?= $ssw["email"]; ?>">
            </li>
            <li style="list-style:none;">
            <label for="no_telp">No.telp :&nbsp;&nbsp;</label>
                <input type="text" name="no_telp" id="no_telp" required placeholder="Masukan No.telp" value="<?= $ssw["no_telp"]; ?>">
            </li>
            <li style="list-style:none;">
                <button type="submit" name="submit" >Ubah Data</button>
            </li>
        </ul>
   </form></center>


</body>
</html>