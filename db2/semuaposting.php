<?php
require_once("konek.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Data</title>
</head>
<body>
    <table width="400px" border=1>
        <tr align="left">
            <th>Nama</th>
            <th>Nim</th>
            <th>Tgl Lahir</th>
            <th>cerita</th>
            <th>Dokumen</th>
            
        </tr>

        <?php
            $sql = "SELECT * FROM siswa";

            $result = mysqli_query($connection, $sql);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    echo "<tr>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["nim"] . "</td>";
                    echo "<td>" . $row["tgl_lahir"] . "</td>";
                    echo "<td>" . $row["cerita"] . "</td>";
                    echo "<td>" . $row["dokumen"] . "</td>";
                     echo "</tr>";
                   
                }
                echo"<a href='form2.php?nim=$id'>Edit</a> | <a href='delete.php?nim=$id'>Hapus</a> |<a href='daftarposting.php?nim=$id'>Posting</a>|<a href='form3.php?nim=$id'>lihat</a> | <a href='halamanawal.php?nim=$id'>Kembali</a>" ;
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>