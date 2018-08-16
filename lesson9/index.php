<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$kainaKatinasEur = 30;
$kainaSuoEur = 150;
$kainaBrieidsEur = 10000;

function convertCurrency($amount, $from, $to){
  $conv_id = "{$from}_{$to}";
  $string = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=$conv_id&compact=ultra");
  $json_a = json_decode($string, true);

  return $amount * round($json_a[$conv_id], 4);
}

echo(convertCurrency(1, "EUR", "USD"));


?> 
<a href="index.php?$conv_id=eur">Kainos Eurais</a>

    <h1>Kaina EUR</h1>
    <div><p>katinas: <?php echo $kainaKatinasEur; ?> EUR</p> </div>
    <div><p>suo: <?php echo $kainaSuoEur; ?> EUR</p></div>
    <div><p>briedis: <?php echo $kainaBrieidsEur; ?>EUR </p></div>
<br>
<br>
<h1>Kaina USD</h1>
<div><p>katinas: <?php echo convertCurrency($kainaKatinasEur,"EUR", "USD") ?> USD</p> </div>
<div><p>suo: <?php echo convertCurrency($kainaSuoEur,"EUR", "USD") ?> USD</p></div>
<div><p>briedis: <?php echo convertCurrency($kainaBrieidsEur,"EUR", "USD") ?> USD </p></div>




</body>
</html>