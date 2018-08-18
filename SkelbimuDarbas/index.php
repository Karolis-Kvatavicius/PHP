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
<input type="file" name="nuotrauka">
<input type="submit" name="ikelti" value="Ikelti">
<?php } else { ?>
    <input type="submit" name="skelbti" value="Skelbti">
<?php } ?>
</div>
<?php

if(isset($_POST['ikelti']) && $_POST['antraste'] != '' && $_POST['turinys'] != ''){
    $naujasSkelbimas = 'failai/'.$_POST['kategorijos'].$_POST['antraste'].'.txt';
    fopen($naujasSkelbimas, "w");
    file_put_contents($naujasSkelbimas, $_POST['turinys']. "this_is_the_end_of_content\n" .base64_encode(file_get_contents($_FILES['nuotrauka']['tmp_name'])), FILE_APPEND);
}

?>
</form>

<div>
<h1>Kategorijos</h1>
<br>
<br>
<a href="http://localhost/skelbimu-saitas/SkelbimuDarbas/automobiliai.php" >Automobiliai</a>
<br>
<a href="http://localhost/skelbimu-saitas/SkelbimuDarbas/dviraciai.php" >Dviraciai</a>
<br>
<a href="http://localhost/skelbimu-saitas/SkelbimuDarbas/pazintys.php" >Pazintys</a>
</div>
</div>
</body>
</html>