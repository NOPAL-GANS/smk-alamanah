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
        $no_telp = htmlspecialchars($data["no_telp"]);
        $email = htmlspecialchars($data["email"]);  
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data
        $query = "INSERT INTO db_staf
                    VALUES 
                    ('', '$nama', '$no_telp', '$email', '$gambar')
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM db_staf WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
   global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);   
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE db_staf SET 
               nama = '$nama',
               no_telp  = '$no_telp',
               email = '$email',
               gambar = '$gambar'
               WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>