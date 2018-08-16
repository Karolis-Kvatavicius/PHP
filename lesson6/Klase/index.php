<?php
function sudeti($vienas, $du = 50)  // jei nusirodomas argumentas(reiksme) juos reikia detis i gala.
{
   $rezultatas = $vienas + $du;
   return $rezultatas;
}
echo'<br>';
// echo 'kai neduota kintamojo reiksme pastovi : '.sudeti(1,10);
echo'<br>';
echo  'kai duota antra reiksme : '.sudeti(1);

echo'<br>';
echo'<br>';
// echo'<br> su masyvu, kai susikuria is daug elementu, kai daug kintamuju arba neaisku kiek ju reiksmiu reikia';

// function1 vidurkis(...$skaiciai)
// {
//    $sudetis = 0;
//    foreach ($skaiciai as $val)
//  {
//    $sudetis += $val;
//  }
//  $vidurkis = $sudetis / count($skaiciai);
//  return $vidurkis;
// }
// echo vidurkis(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

echo '1.Parašykite funkciją, kuri gražintų tekstą įterptą į h1 tagą.';
echo '<br>';
echo '<br>';

function h1Tag($text, $h){
if(is_numeric($h) && $h>0 && $h < 7){

    $h1text ='<div style="display:inline-block";><h'.$h.'>'.$text.'</h'.$h.'></div>';

    return $h1text;
}
echo 'nera <br>';

}
echo h1Tag('La la la',1);
echo h1Tag('La la la ',3);
echo h1Tag('La la la',5);
echo h1Tag('La la la','a');
echo h1Tag('La la la',0);
echo h1Tag('La la la',8);



echo '<br>';
echo '<br>';
echo'2.Parašykite funkciją, kuri tekstą įterptų į span tagą ir nuspalvotų atsitiktinę spalva';
echo '<br>';
function color($text)
{
$addtext ='<span style="color: rgb(' .rand(0, 256).','.rand(0, 256).','. rand(0, 256).' ">'.$text.'</span>';

return $addtext;
}
echo '<br>';
echo '<br>';
echo color('spalvotas tekstas?');
echo '<br>';

for($i = 1; $i<100; $i++){

echo h1Tag(color('*'), rand(1,6));
}


echo '<br>';

echo "John Smith\n";
echo '<h1>Antra Tema Darbas su failais</h1>';
echo '<br>';
// $homepage = file_get_contents('http://www.google.com/');
echo $homepage;
