<!-- <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lesson4</title>
        <link rel="stylesheet" href="css/style.css"
    </head>
    <body>
<?php

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
//    echo 'Reikšmė: ' . $value . '<br>';
}


echo '<br>';
echo'<pre>';
print_r($colors);

echo '<br>';
echo '<br>';

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value.'<br>';
}

echo '<br>';
echo'1.Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
';
echo '<br>';
$masyvas = [];
for($x = 1; $x <=30; $x++){
    // echo'Numeris : '.$x.'<br>';
    $masyvas[] = rand(5,25);
}
print_r($masyvas);
echo '<br>';
echo '2. Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra elementų didesnių už 10';
echo '<br>';
$count = 0;
foreach($masyvas as $value){
    if($value > 10){
        $count++;
    }
} 
// echo 'Numeriu didesniu uz 10 yra '.$count.'<br>';

echo'<br>';
echo' a ) Raskite didžiausio elemento reikšmę';
$max = 0;
foreach($masyvas as $stalcius){
    if($stalcius > $max){
       $max = $stalcius;
    }

}

// $value = max($masyvas);
echo'<br>';
echo 'b) Didziausia elemento reiksme: '.$max;
echo'<br>';

$sum = 0;
foreach($masyvas as $stalcius){
    // echo'<br>tarpine suma: '.$sum;
        $sum += $stalcius;
}
echo'<br>';
echo 'Suma : '.$sum;
echo'<br>';

echo' d) Išveskite visų elementų reikšmes minus to elemento indeksas';
//vardas - indeksas arba stalciaus vardas
// stalcius - stalciaus turinys
foreach($masyvas as $vardas => $stalcius){
    // echo'<br>minus index : '.($stalcius - $vardas);

}
echo'<br>';
echo'<br>';
echo' e) “Apverskite” masyvą. (kad 0 reikšmė taptų 29, 1 reikšmė 28 ir t.t.)';
echo'<br>';
echo'<br>';
$apverstas_masyvas = [];
$masyvo_dydis = count($masyvas); //=30
$apvesto_masyvo_indeksas = 0; //apvesto masyvo stalciaus vardas

foreach($masyvas as $vardas => $stalcius){
    $apverstas_masyvas[($masyvo_dydis - $vardas - 1)] = $stalcius;

}
print_r($apverstas_masyvas);

echo'f) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39';
$masyvas = [];
for($x = 1; $x <=30; $x++){
    // echo'Numeris : '.$x.'<br>';
    $masyvas[] = rand(5,25);
}
for($i = 0; $i < 10; $i++){
    $masyvas[] = rand(5,25);
}
echo'<br>';
print_r($masyvas);
echo'<pre>';
echo'<br>';
echo'<br>';
echo'g) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių';echo'<br>';echo'<br>';
$poriniai = [];
$neporiniai = [];
foreach($masyvas as $value) {
    if ($value % 2 == 0) {
        $poriniai[] = $value;
    } else {
        $neporiniai[] = $value;
    }
}
echo 'Poriniu masyvas';
echo'<br>';
print_r($poriniai);
echo 'Neporiniu masyvas';
echo'<br>';
print_r($neporiniai);

echo'<br>';
echo'<br>';



echo'<br>';
echo'<br>';
echo 'h) Masyvo porinius elementus padarykite lygius 0 jeigu jie didesni už 15';
echo'<br>';
echo'<br>';
foreach($masyvas as $index => $stalcius){
    if($stalcius % 2 == 0 && $stalcius > 15 ){
        $masyvas[$index]=0;
    }
} 
print_r($masyvas);
echo'<br>';
echo'<br>';
echo ' i ) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10';
echo'<br>';
echo'<br>';
foreach($masyvas as $index => $stalcius){
    if($stalcius > 10){
        break;
    }
}


// print_r($masyvas);
echo'<br>'; 
// echo ' pirmas elementas su reiksme didesne nei 10 yra '.$stalcius.' jo masyvo indeksas ['.$index.']';
echo'<br>';
echo'<br>';
echo'Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;';
foreach($masyvas as $index => $stalcius) {
    if ($index % 2 == 0) {
       unset($masyvas[$index]);
    }
}
echo'<br>';
print_r($masyvas);


echo'k) Pakeiskite masyvą prie jo reikšmių pridėdami 24';
echo'<br>';


$sum = 24;
foreach($masyvas as $index => $stalcius){
        $masyvas[$index] +=$sum;
}
echo'<br>';
print_r($masyvas);
echo'<br>';



?>

     </body>
    </html> -->