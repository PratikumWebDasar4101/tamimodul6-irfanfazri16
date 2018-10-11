<?php
require_once("konek.php");


$nim = $_POST["nim"];
$cerita = $_POST["cerita"];

$file=$_FILES['dokumen'];
$nama_file =$file['name'];
$nama_tmp =$file['tmp_name'];
$upload_dir="upload/";
$upload_target=$upload_dir.$nama_file;
if(!move_uploaded_file($nama_tmp, $upload_target)){
	die("foto gagal upload..!!");
}



$sql = "UPDATE siswa SET cerita='$cerita', dokumen='$upload_target' WHERE nim=$nim";

if (mysqli_query($connection, $sql)) {
    echo "data berhasil diupdate";
}else {
    echo "tidak dapat update record: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
echo "menuju <a href='semuaposting.php'>link ini</a> untuk melanjutkan";