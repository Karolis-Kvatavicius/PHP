<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uzduotys</title>
    <link rel="stylesheet" href="css/style.css">
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body  class = "block">
<h1>Apklausa</h1>
<div class = "container">
<p>Koks tai gyvunas? </p>
<img src="img/briedis.jpg" alt="briedis.jpg" height="300" width="300">
<form action="" method="post">
<input type="radio" name="Elnias" value="Elnias">Elnias
<input type="radio" name="radio" value="Višta">Višta
<input type="radio" name="radio" value="Šuo">Šuo
<br>
<br>
<input type="submit" name="submit" value=" Spėti " />
</form>
<?php
if (isset($_POST['submit'])) {
if(isset($_POST['Elnias']))
{
echo '<span style="color: rgb(9, 255, 21) "><br>Jūsų atsakymas teisingas, tai yra : <br>'.$_POST['Elnias'].'</span>'; 
}
elseif(isset($_POST['radio'])){
    echo '<span style="color: rgb(255, 79, 9) "><br>Jūsų atsakymas neteisingas, tai nėra : <br>'.$_POST['radio'].'</span>';
}else{
    echo 'Jūs nieko nepasirinkote ';
}

}


?>
</div>

</body>
</html>