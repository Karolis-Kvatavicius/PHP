<!DOCTYPE html5>
<html>
    <head>    
        <meta charset="utf-8">
        <title>lesson3</title>
        <meta name="responsive" content="width=device-width, initial-scale=1">
        <meta name="description" content="lesson">
        <meta name="author" content="Donata">
        <link rel="stylesheet" href="css/style.css"
    </head>
    <body>
<?php


$x = 1; 
while($x <= 10) {
    echo 'Numeris: '.$x.' <br>';
	$x++;
} 


echo '<br>';
echo '<br>';
do {
    echo 'Numeris yra: '.$x.' <br>';
	$x++;
} while ($x <= 5);

echo '<br>';
echo '<br>';
echo' 1. Naršyklėje nupieškite linija iš 400 “*”.';
echo '<br>';
echo '<br>';
$x=0;
while($x<=400){
    $x++;
    echo '*';

}

echo '<br>';
echo '<br>';
echo '2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300 ir suskaičiuokite kiek tarp jų yra didesnių už 150. Rezultatą išveskite';
echo '<br>';
echo '<br>';


$count = 0;
$task_2 =0;   // kintamasis tik kad ciklas vyktu iki 300 kaip pvz
while($task_2<300){
    $skaic = rand(0,300);  // kintamasis,kad atliekamas rand butu'
    $task_2++;
    if($skaic>150){
        $count++;
    }
} 
echo 'daugiau uz 150 yra '.$count;
echo '<br>';



echo '<br>';
echo '<br>';
?> <h3>3.Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais.</h3><?php
echo '<br>';
echo '<br>';
$skaiciai = 0;

while($skaiciai<3000){
    $skaiciai++;
    if(!($skaiciai % 77)){
        echo $skaiciai.' , ';
   
    }
} 

// kableli gale panaikinti, realiai reeiktu nustatyt,kad pirmas butu be kablelio geriausia

?>
<h3>5.Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną
atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.<br>
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:<br>
a) Iškritus herbui;<br>
b) Iškritus skaičiui;<br>
c) Tris kartus iškritus skaičiui;<br>
d) Tris kartus iš eilės iškritus herbui;</h3>

<?php
echo '<br>';
echo 'salyga a ir b, iskritus skaiciui arba herbui';
echo '<br>';
$count = 0;
while(true){
$rand = rand(0,1);
if($rand == 0){
    echo 'H';
    break;

}if($rand == 1){
    echo 'S';
    break;
}
if($rand == 1){
$count++;
}
if($count == 3){
    echo '3 skaic.';
    break;

}
if($rand == 0){
    $count++;
    }else{
        $count = 0;
    }
    if($count == 3){
        echo '3 herbai.';
        break;

}
}
echo'<br>';
echo'<br>';
// echo '<br>';
// switch ($rand) {
//     case 0:
//         echo 'H';
//         break;
//     case 1:
//         if($s==3);
//         echo 'S';
//         break;
//     default:
//         echo "---";
// }
echo'6.Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20, Kazys
surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų
kiekiu ir “Partiją laimėjo: laimėtojo vardas ”;
Taškų kiekį generuokite funkcija rand() ;
Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol
kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.';
echo'<br>';
echo'<br>';
$petro_rezultatas=0;
$kazio_rezultatas=0;
while($petro_rezultatas<222 && $kazio_rezultatas<222){
$petras_taskai=rand(10,20);
$kazys_taskai=rand(5,25);
echo 'Petro surinkti taskai : '.$petras_taskai;
echo'<br>';
echo 'Kazio surinkti taskai : '.$kazys_taskai;
echo'<br>';
if($petras_taskai > $kazys_taskai){
    echo'Partija laimejo Petras';
    $petro_rezultatas+=$petras_taskai;
}else echo 'Partija laimejo Kazys';
$kazio_rezultatas+=$kazys_taskai;
echo'<br>';
echo'<br>';
}
echo '<br>';
echo 'Petro surinkti taskai : ' .$petro_rezultatas;
echo '<br>';
echo 'Kazio surinkti taskai :  ' .$kazio_rezultatas;


?>
<h3>4.a) Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”.  b) Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis</h3>
<div class = "square">
<center>
<?php
  echo "<pre>";   
for ($i=0; $i<100; $i++) {  
  for($j=0; $j<100; $j++) {  
     echo '*';  
  }

  echo '<br>';
}

?>
</div>
</center>
<h3>7.Pakartokite 4 uždavinį, bet kvadratą padarykite tuščiavidurį taip, kad žvagždutės būtų tik kvadrato kraštinėse.</h3>
<div class = "empty">
<?php

        for ($i = 0; $i <= 50; $i++)
        {
            for ($j = 0; $j <= 50; $j++)
            {
          
                if ($i == 0 || $i== 50 || $j==0 || $j==50){
                    printf("* ");
                  }  else
                  printf("  ");
            
       
                }
            printf("\n");
        }

?>
</div>
</body>
</html>
