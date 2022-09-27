<?php
include"koneksi.php";
$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$telp=$_REQUEST['telp'];
$pesan=$_REQUEST['pesan'];

$mysqli="INSERT INTO db_contact (nama, email, no_telp, pesan) VALUES('$nama', '$email', '$telp', '$pesan')";
$result=mysqli_query($conn, $mysqli);

if($result){
    echo "input berhasil";
}else{
    echo "input gagal";
}
mysqli_close($conn);

?>