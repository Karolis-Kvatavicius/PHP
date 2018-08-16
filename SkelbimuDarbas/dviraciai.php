<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <title>DVIRACIAI</title>
</head>
<body>
<div>
<h1>Kategorijos</h1>
<br>
<br>
<a href="http://localhost/phppamokos/PHP/SkelbimuDarbas/index.php" >Pagrindinis</a>
<br>
<a href="http://localhost/phppamokos/PHP/SkelbimuDarbas/automobiliai.php" >Automobiliai</a>
<br>
<a href="http://localhost/phppamokos/PHP/SkelbimuDarbas/pazintys.php" >Pazintys</a>
</div>
<div class="pagrn">
<div class="skelbimu">
<?php

if ($handle = opendir('failai/dviraciai/')) {
    while (false !== ($entry = readdir($handle))) {
    if($entry != '.' && $entry != '..'){
        echo '<div class="skelbimas">';
  echo '<h3>'.basename('failai/dviraciai/'.$entry,'.txt').'</h3>';


   echo '<p>'.@file_get_contents('failai/dviraciai/'.$entry).'<p>'; //klaidom pasalint @ 
    echo '</div>';
    }
}
    closedir($handle);
 }



?>
</div>
</div> 
</body>
</html>