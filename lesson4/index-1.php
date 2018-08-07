<?php


$a= rand(0,10);
$b = rand(0, 10);
$c = rand(0,10);

if($b > $a)
{
    echo  $b.' > '.$a;
}
elseif($a == $b){
    echo  $b.' == '.$a;
}else{
    echo $b.' < '.$a;
}

echo '<br>';

if($c < $b){
    echo $b.' > '.$c;
}
elseif($c == $b){
    echo  $b.' == '.$c;
}else{
    echo $b.' < '.$c;
}

print'<br>';

print'<br>CIKLAI<br>';

print'<br> FOR <br>';
$b = 'Laba diena<br>';

for($a = 0; $a <= 3; $a++){
    echo '<br>'.$b;
}

print'<br>';
print'<br>';

print'<br> WHILE <br>';
$c = 'viso gero<br>';
print'<br>';
$a=0;
while($a <= 5){
    $a++;
    echo'<br>'.$c;
}
print'<br>';
print'<br>';
print'MASYVAS';

$a = [1,2,3,4, 'labas' => 'ate'];

foreach($a as $i => $v){
    echo '<br> indeksas -  ['.$i.'] <<>> reiksme -   '.$v.';';

}

print'<br>';
print'<br>';
print'CIKLAS CIKLE';
print'<br>';
print'<br>';
$i = 'bla bla';

for ($x = 1; $x <= 5; $x++) {

echo'prasideda mazas ciklas <br>';
print'<br>';
    for ($x = 1; $x <= 5; $x++) {



    echo '<br> Sakom : '.$i.' <br>';
} 
}
print'vienas ciklo ratas prasisuko';
print'<br>';
print'///////////////////////////////';


print'<br>';
print'<br>';

$i = 'bla bla';

for ($k = 1; $k <= 3; $k++) {

echo'prasideda mazas ciklas <br>';
print'<br>';
    for ($z = 1; $z <= 3; $z++) {



    echo '<br> Sakom : '.$i.' <br>';
} 

}

print'MASYVAS MASYVE';

$masyvas = [
'pirmas' => ['a','a','a'],
'antras' => ['b','b','b'],
'trecias' => ['c','c','c']
];
echo'<pre>';
print_r($masyvas);




foreach($masyvas as $v){

//ispausdinama masyvo masyve reiksmes

    foreach($v as $ii => $vv){
      
        print'<br>';
        echo'<br> indeksas : '.$ii.' reiksem : '.$vv;
    }
}
    
// if($masyvo_ilgis <= 2){
// echo'mas';
// }else{
//     $masyvo_ilgis++;
//     print_r($masyvas);
// }
//     }

