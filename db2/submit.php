<?php
require_once("konek.php");

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$tgl_lahir = $_POST["tgl_lahir"];
	

$sql = "INSERT INTO siswa(nama,nim,tgl_lahir)
         VALUES('$nama','$nim','$tgl_lahir')";

if (mysqlI_query($connection, $sql)) {
    echo "data baru berhasil<br>";
}else {
    echo "error: " .
    $sql . "<br>" .
    mysqli_error($connection);
}

mysqli_close($connection);
echo "menuju <a href='list.php'>link ini</a> untuk melanjutkan";