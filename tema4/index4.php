<?php
echo'5. Sukurkite masyvą iš 10 elementų. 
Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
Elementų reikšmės tuščias stringas ‘’<br>';
echo'<pre>';


$masyvas = [];
$masyvas2 = [];

for($j=0; $j<10; $j++){
    $x = rand(2,20);
    for($i =0; $i<$x; $i++){
        $masyvas2[] ="";
    }
        $masyvas[] = $masyvas2;
        unset($masyvas2);
   
    }
      
    print_r($masyvas);




