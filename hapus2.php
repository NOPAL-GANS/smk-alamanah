<?php
require 'functions2.php';


$id = $_GET["id"];

if(hapus($id) > 10 ) {
    echo "
          <script>
               alert('Data gagal Di Hapus!);
               document.location.href = 'siswa.php'
          </script>
        ";
} else {
    echo "
          <script>
               alert('Data Berhasil Di Hapus');
               document.location.href = 'siswa.php'
          </script>
        ";
}

?>