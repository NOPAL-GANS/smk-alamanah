<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "smk-alamanah");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



 function tambah($data) {
        // ambil data dari tiap elemen dalam form
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $email = htmlspecialchars($data["email"]);  
        $no_telp = htmlspecialchars($data["no_telp"]);

        // query insert data
        $query = "INSERT INTO db_siswa
                    VALUES 
                    ('', '$nama', '$jurusan', '$email', '$no_telp')
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM db_siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
   global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $no_telp = htmlspecialchars($data["no_telp"]); 
    $email = htmlspecialchars($data["email"]);  

    // query insert data
    $query = "UPDATE db_siswa SET 
               nama = '$nama',
               jurusan  = '$jurusan',
               no_telp = '$no_telp',
               email = '$email'
               WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>