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
<div>
            <?php
            $visiKlausimai = 3;
            $atsakymas = '';
            if (isset($_GET['spejam'])) {
                $teisingiAtsakymai = $_GET['task1'] + $_GET['task2'] + $_GET['task3'];
                $procentas = ($teisingiAtsakymai/$visiKlausimai) * 100;
                echo '<p id="result">Jūs atsakėte į ' .$teisingiAtsakymai. ' iš 3 klausimų teisingai. Surinkote ' .$procentas. ' %</p>';
            }
   
            ?>
            </div>
<div class="form">
<form  action="task3.php" method="GET">
<img src="img/briedis.jpg" alt="briedis.jpg" height="300" width="300">
<p>Koks tai gyvunas? </p>
<form action="task3.php" method="post">
<select name="task1">
<option name="task1" value=0></option>
<option name="task1" value=1>Elnias</option>
<option name="task1"value="0">Vista</option>
<option name="task1"value="0">Suo</option>
<option name="task1"value="0">Kate</option>
</select>
<?php
                    if (isset($_GET['task1'])) {
                        $atsakymas = $_GET['task1'];
                        if ($atsakymas == 1) {
                            echo '<span style="color: rgb(9, 255, 21)"<br>Jūsų atsakymas teisingas<br></span>'; 
                        }
                        else{
                            echo '<span style="color: rgb(255, 79, 9)"<br>Jūsų atsakymas neteisingas <br></span><br>';
                        }
                    }
                    ?>

<br>
<br>
<div>
<img src="img/CHICKEN.jpg" alt="CHICKEN.jpg" height="250" width="250">
<p>Koks tai gyvunas? </p>
<select name="task2">
<option name="task2" value=0></option>
<option name="task2" value="0">Elnias</option>
<option name="task2" value=1>Vista</option>
<option name="task2" value="0">Suo</option>
<option name="task2" value="0">Kate</option>

</select>
<?php
                    if (isset($_GET['task2'])) {
                        $atsakymas = $_GET['task2'];
                        if ($atsakymas == 1) {
                            echo '<span style="color: rgb(9, 255, 21)"<br>Jūsų atsakymas teisingas<br></span>'; 
                        }
                        else{
                            echo '<span style="color: rgb(255, 79, 9)"<br>Jūsų atsakymas neteisingas <br></span><br>';
                        }
                    }
                    ?>
</div>
<br>
<br>
<br>
<div>
<img src="img/Dogs.jpg" alt="Dogs.jpg" height="300" width="300">
<p>Koks tai gyvunas? </p>
<select name="task3">
<option name="task1" value=0></option>
<option name="task3" value="0">Elnias</option>
<option name="task3" value="0">Vista</option>
<option name="task3" value=1>Suo</option>
<option name="task3" value="0">Kate</option>
</select><?php
                    if (isset($_GET['task3'])) {
                        $atsakymas = $_GET['task3'];
                        if ($atsakymas == 1) {
                            echo '<span style="color: rgb(9, 255, 21)"<br>Jūsų atsakymas teisingas<br></span>'; 
                        }
                        else{
                            echo '<span style="color: rgb(255, 79, 9)"<br>Jūsų atsakymas neteisingas <br></span><br>';
                        }
                    }
                    ?>
</div>
<br>
<br>

<?php


?>

  <input type="submit" name="spejam" <?php echo isset($_GET[ 'spejam']) ? "disabled" : ""?> value="Spėti">
 <!-- <input type="submit" name="spejam" value=" Spėti " />  -->
 </div>
</form>



</body>
</html>