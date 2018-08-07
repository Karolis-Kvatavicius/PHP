<?php
echo'<pre>';
echo '3.Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.';
echo '<br>';
$masyvas = [];
$masyvas2 = [];
for($x = 0; $x < 10; $x++) {
    for($i = 0; $i < 5; $i++) {
        $masyvas2[] = rand(5,25);
    }
    $masyvas[] = $masyvas2;
    unset($masyvas2);
}
    print_r($masyvas);



    echo '4. Naudodamiesi 3 uždavinio masyvu:<br>
    a) Suskaičiuokite kiek masyve yra elementų didesnių už 10 <br>';

    $count = 0;
    foreach($masyvas as $indeksas ){
    foreach($indeksas as  $elementas2){
     if($elementas2>10){
       $count++;
     }
    }
  }
echo 'masyve yra elementų didesnių už 10 :  <br> '.$count.'<br>';


echo'<br> b) Raskite didžiausio elemento reikšmę';

$max = 0;
foreach($masyvas as $index){
  foreach($index as $elementas2){
if($elementas2>$max){
  echo '<br> didziausios reiksmes : ';
  echo $max = $elementas2;
}


  }

}
echo '<br>';
echo '<br> didziausia reiksme : '.$max;



echo '<br>';
echo'<br> c) Visus mažesnius masyvus “pailginkite” iki 7 elementų<br>';
echo '<br>';
echo '<br>';
$size = count($masyvas);
for ($j = 0; $j < $size; $j++) { 
    array_push($masyvas[$j], rand(0,25), rand(0,25));
}
echo'size '.$size.'<br>';
    print_r($masyvas);

    echo '<br>';
    echo '<br>';
echo' d) Suskaičiuokite kiekvieno iš mažesnių masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą.
 T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai <br>';


 echo '<br>';
 echo '<br>';
