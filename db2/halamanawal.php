<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form  action="submit.php"  method="post" enctype="multipart/form-data">
        <table>
            <tr><td><h1>silahkan isi data <h1></td></tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir"></td>
            

            <tr>
                <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="posting" name="submit" formaction="semuaposting.php"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>