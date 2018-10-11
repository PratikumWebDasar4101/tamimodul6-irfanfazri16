<?php
require_once("konek.php");

$id = $_GET["nim"];

$sql = "SELECT * FROM siswa WHERE nim=$id";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="posting.php" method="post" enctype="multipart/form-data">
        <table>
           
            <tr><td>Nim</td><td><input type="text" name="nim2" value="<?php echo $row["nim"]; ?>" disabled>
                      <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>"></td></tr>
                       <tr><td>cerita</td><td><textarea name="cerita" rows=20 cols=80></textarea></td></tr>
                        <tr><td>Foto
        <td><input type="file" name="dokumen" required>
        </td></td></td></tr>
            <tr><td colspan="2"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
