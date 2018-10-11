<?php
require_once("konek.php");

$id = $_GET["nim"];

$sql = "DELETE FROM siswa WHERE nim=$id";

if (mysqli_query($connection, $sql)) {
    echo "data telah dihapus";
}else {
    echo "error: " . $sql . "<br>" . mysqli_error($connection);
}