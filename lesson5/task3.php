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
<body>
<h1>Apklausa</h1>
<img src="img/briedis.jpg" alt="briedis.jpg" height="300" width="300">
<p>Koks tai gyvunas? </p>
<form action="" method="post">
<select name="task3">
<option value="1">Elnias</option>
<option value="2">Vista</option>
<option value="3">Suo</option>
<option value="4">Kate</option>
</select>
<br>
<br>
<!-- <input type="submit" name="submit"  /> -->
</form>
<br>
<br>

<br>
<br>
<img src="img/CHICKEN.jpg" alt="CHICKEN.jpg" height="250" width="250">
<p>Koks tai gyvunas? </p>
<form action="" method="post">
<select name="task3">
<option value="1">Elnias</option>
<option value="2">Vista</option>
<option value="3">Suo</option>
<option value="4">Kate</option>
</select>
<br>
<!-- <input type="submit" name="submit" /> -->
</form>

<br>
<br>
<img src="img/Dogs.jpg" alt="Dogs.jpg" height="300" width="300">
<p>Koks tai gyvunas? </p>
<form action="" method="post">
<select name="task3">
<option value="1">Elnias</option>
<option value="2">Vista</option>
<option value="3">Suo</option>
<option value="4">Kate</option>
</select>
<br>
<br>
<!-- <input type="submit" name="submit" /> -->
<?php
if (isset($_POST['submit'])) {
    if(isset($_POST['Elnias']))
    {
    echo '<span style="color: rgb(9, 255, 21)"<br>Jūsų atsakymas teisingas, tai yra : <br>'.$_POST['Elnias'].'<br></span>'; 
    }
    else{
        echo '<span style="color: rgb(255, 79, 9)"<br>Jūsų atsakymas neteisingas <br></span><br>';
    }
    if(isset($_POST['Višta']))
    {
    echo '<span style="color: rgb(9, 255, 21)"<br>Jūsų atsakymas teisingas, tai yra : <br>'.$_POST['Višta'].'<br></span><br>'; 
    }
    else{
        echo '<span style="color: rgb(255, 79, 9)"<br>Jūsų atsakymas neteisingas><br></span><br>';
    }
    if(isset($_POST['Šuo']))
    {
        echo '<span style="color: rgb(9, 255, 21) "<br>Jūsų atsakymas teisingas, tai yra : <br>'.$_POST['Šuo'].'<br></span>';
    }
    else{
    echo '<span style="color: rgb(255, 79, 9) "<br>Jūsų atsakymas neteisingas <br></span><br>';
    }

}


?>

 <input type="submit" name="submit" value=" Spėti " />
</form>



</body>
</html>