<!DOCTYPE html5>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <title>PAZINTYS</title>
</head>
<body>
<div>
<h1>Kategorijos</h1>
<br>
<br>
<a href="http://localhost/skelbimu-saitas/SkelbimuDarbas/index.php" >Pagrindinis</a>
<br>
<a href="http://localhost/skelbimu-saitas/SkelbimuDarbas/automobiliai.php" >Automobiliai</a>
<br>
<a href="http://localhost/skelbimu-saitas/SkelbimuDarbas/dviraciai.php" >Dviraciai</a>
</div>
<div class="pagrn">
<div class="skelbimu">
<?php

if ($handle = opendir('failai/pazintys/')) {
    while (false !== ($entry = readdir($handle))) {
    if($entry != '.' && $entry != '..'){
        echo '<div class="skelbimas">';
        echo '<h3>'.basename('failai/pazintys/'.$entry,'.txt').'</h3>';
        $skelbimoTurinys = explode('this_is_the_end_of_content', file_get_contents('failai/pazintys/'.$entry), 2); 
        echo '<p>'.$skelbimoTurinys[0].'<p>';
        // if(array_key_exists('1', $skelbimoTurinys)) {
        echo '<img width="500px" height="300px" src="data:image/jpg;base64,' . $skelbimoTurinys[1] . '" />';
        // }
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