<?php
session_start();
if(isset($_SESSION['sesija']) && $_SESSION['sesija'] == true){
    header('Location:http://localhost/phppamokos/PHP/tarpinisDarbas/index.php');
    exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <title>Login</title>
</head>
<body>
<?php

$email = 'donata@donata.lt';
$password = '1';


if(isset($_POST['enter_password'])){
if($_POST['password'] == $password && $_POST['user_name']==$email) {
    $_SESSION['sesija'] = true;
    header('Location:http://localhost/phppamokos/PHP/tarpinisDarbas/index.php');
    exit;
 }

}




?>

<!-- <h1>LOGIN</h1> -->
<form action = "login.php" method = "post" >
    <div class = "forma2">
<br> <h4>User name: </h4><br>
  <input class = "white2" type="text" name="user_name"><br>
  <br><h4> Password: </h4><br>
  <input class = "white2" type="password" name="password">
<br>
<br>
 <input id = "input2" type="submit" name ="enter_password" value="LOGIN">
 </div>
</form>
</body>
</html>