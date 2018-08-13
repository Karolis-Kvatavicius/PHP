<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uzduotys</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<?php
 $x=0;
$y=0;
$sum = '';



$klaida = false;

if(isset($_POST['x'])){
if(!is_numeric($_POST['x'])){ //pasitikrinimas del klaidos, jei yra ivesta neskaicius
    $klaida = true;
}
    $x=(int) $_POST['x'];
  }
  if(isset($_POST['y'])){
    //   if(!is_numeric($POST['y'])){
    //       $klaida = true;
    //   }
    $y =(int) $_POST['y']; // int pridejus gaunamas visada skaicius 0;
}
// echo 'Suma : '.$sum;

?> 
<div class = "forma">
<form action ="task1.php" method="POST">
<br>
<p>Iveskite reiksmes: </p>
<br>
<br>
X:
<input type="text" name="x" value="">
<br>
<br>
Y :
<input type="text" name="y" value="">
<br>
<br>
<input type="submit" value="Susumuoti">
</form>
</div>
<br>
<br>
<p>Jūsų x reiksme: <br><?php echo $x ?> </br></p>
  <p>Jūsų y reiksme : <br> <?php echo $y ?> </br></p>
  <br>
<br>
<?php

if($klaida){
    echo'KLAIDA! 
    <br>
    <br>Neteisinga ivestis';
}else{
  
    $sum = $x + $y;
   echo '<br>REZULTATAS  <br>'.$x.' + '.$y.' =  '.$sum;
}
?>
</body>
</html>