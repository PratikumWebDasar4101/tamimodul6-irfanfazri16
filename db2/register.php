<?php

require_once("config.php");

if(isset($_POST['register'])){

   
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    $saved = $stmt->execute($params);

    if($saved) header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    </head>
<body >

    <form action="" method="POST">
        <table>
        <tr><td><h1>Silahkan daftarkan diri anda</td></tr>
           
                <tr><td>Nama Lengkap
                <td><input  type="text" name="name" placeholder="Nama kamu" />
            

            <tr><td>Username
                <td><input  type="text" name="username" placeholder="Username" />
           

            
               <tr><td>Email
                <td><input  type="email" name="email" placeholder="Alamat Email" />
          

          
               <tr><td>Password
                <td><input  type="password" name="password" placeholder="Password" />
            

            <tr><td><input type="submit" name="register" value="Daftar" />

        </form>
            
      

</body>
</html>
