<?php
session_start();

if(isset(!$_SESSION['sesija']) || $_SESSION['sesija'] === true){
    header('Location:http://localhost/phppamokos/PHP/tarpinisDarbas/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$email = 'donata@donata.lt';
$password = 'ooo';


if(isset($_POST['enter_password'])){
if($_POST['password'] == $password && $_POST['user_name']==$email) {
    echo '<h1> Welcome </h1>';
 }
 else{
     echo '<h1> Try again !  </h1>';
 }
}



?>







<h1>Login</h1>
<form action = "index.php" method = "post" >
<br> User name: <br>
  <input type="text" name="user_name"><br>
  <br> Password:<br>
  <input type="password" name="password">
<br>
<br>
 <input type="submit" name ="enter_password" value="LOGIN">
</form>

</body>
</html>