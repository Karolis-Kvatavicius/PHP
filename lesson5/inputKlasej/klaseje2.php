<html><head>

</head>

<body>
  <?php 
  $vardas ='neivestas';
  $elpastas ='neivestas';
  $slaptazodis ='neivestas';

//isset tikrinama ar jau yra sukurtas kintamasis
  if(isset($_POST['vardas'])){
    $vardas = $_POST['vardas'];
  }
  if(isset($_POST['elpastas'])){
    $elpastas = $_POST['elpastas'];
}
if(isset($_POST['slaptazodis'])){
    $slaptazodis = $_POST['slaptazodis'];
  }

  ?>
  
  <p>Jūsų vardas: <b><?php echo $vardas ?> </b></p>
  <p>Jūsų el. paštas <b> <?php echo $elpastas ?> </b></p>
  <p>Jūsų slaptazodis <b> <?php echo $slaptazodis ?></b></p>


  <form action="input.php" method="POST">
Jūsų vardas
<input type="text" name="vardas" value="">
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<br>
Jūsų slaptazodis:
<input type="password" name="slaptazodis" value="">

<br>
<input type="submit" value="Išsiųsti">
</form>






</body>







</html>