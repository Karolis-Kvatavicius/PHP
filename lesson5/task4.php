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
$x = 0;
$y = 0;
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

$sum = $x + $y;
// echo 'Suma : '.$sum;

?> 
<div class = "forma">
<form action ="task4.php" method="POST">
<br>
<p>Iveskite reiksmes: </p>
<br>
X:
<input type="text" name="x" value="">
<br>
Y :
<input type="text" name="y" value="">
<br>
<br>
<select name="task4">
<option value="1">Sudetis</option>
<option value="2">Atimtis</option>
<option value="3">Dalyba</option>
<option value="4">Daugyba</option>
</select>
<br>
<br>
<input type="submit" value="Rezultatas">
</form>
</div>
<br>

<p>Jūsų x reiksme: <b><?php echo $x ?> </b></p>
  <p>Jūsų y reiksme : <b> <?php echo $y ?> </b></p>
 
 <?php
  if(isset($_POST['task4'])){
    $task4 = $_POST['task4'];
    switch ( $task4 ) {
        case '1':
            $sum = $x + $y;
            echo '<br> '.$x.' + '.$y.' = '.$sum;
            break;
        case '2':
            $sum = $x - $y;
            echo '<br> '.$x.' - '.$y.' = '.$sum;
            break;
        case '3':
            $sum = $x / $y;
            echo '<br> '.$x.' / '.$y.' = '.$sum;
            break;
        case '4':
            $sum = $x * $y;
            echo '<br> '.$x.' * '.$y.' = '.$sum;
                break;
        default:
         echo 'reiksmes nebuvo ivestos';
            break;
    }
}
?>

<?php
if($klaida){
    echo'KLAIDA! 
    <br>
    <br>Neteisinga ivestis';
}
?>
</body>
</html>