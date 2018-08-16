<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <title>Skelbimu portalas</title>
</head>
<body>
<?php
if(isset($_POST['ikelti']) && $_POST['antraste'] != '' && $_POST['turinys'] != ''  ){
    fopen('failai/'.$_POST['kategorijos'].$_POST['antraste'].'.txt', "w");
    file_put_contents('failai/'.$_POST['kategorijos'].$_POST['antraste'].'.txt', $_POST['turinys'], FILE_APPEND);


}


?>
<div class="forma">
<form action="index.php" method="post" enctype="multipart/form-data">

<div class="forma2">
    
<?php if(isset($_POST['skelbti'])){?>
    <select name="kategorijos" id="">
    <option name="kategorijos" value="automobiliai/">Automobiliai</option>
    <option name="kategorijos" value="dviraciai/">Dviraciai</option>
    <option name="kategorijos" value="pazintys/">Pazintys</option>
</select>
<input type="text" name="antraste" placeholder="Antraste" required>
<textarea name="turinys" id="textarea" cols="30" rows="10" required></textarea>
    <input type="submit" name="ikelti" value="Ikelti">
<?php } else { ?>
    <input type="submit" name="skelbti" value="Skelbti">
<?php } ?>
</div>
</form>

<div>
<h1>Kategorijos</h1>
<br>
<br>
<a href="http://localhost/phppamokos/PHP/SkelbimuDarbas/automobiliai.php" >Automobiliai</a>
<br>
<a href="http://localhost/phppamokos/PHP/SkelbimuDarbas/dviraciai.php" >Dviraciai</a>
<br>
<a href="http://localhost/phppamokos/PHP/SkelbimuDarbas/pazintys.php" >Pazintys</a>
</div>
</div>