<?php
require_once("config.php");
  

    if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
   
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

   
    if($user){
       
        if(password_verify($password, $user["password"])){
           
            session_start();
            $_SESSION["user"] = $user;
            
            header("Location: halamanawal.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>

    
</head>
<body >



        

        <form action="" method="POST">
        	<table>
        	<tr><h1>Masuk ke Pendaftaran</h1></tr>
        

            
                <tr><td>Username
                <td><input  type="text" name="username" placeholder="Username atau email" />
            


            
                <tr><td>Password
                <td><input  type="password" name="password" placeholder="Password" />
            

            <tr><td><input type="submit"  name="login" value="Masuk" />

            	<tr><td><p>Belum punya akun? <a href="register.php">Daftar di sini</a></p></td></tr>

        </form>
      
</body>
</html>
