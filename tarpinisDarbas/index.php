<?php
session_start();
if(!isset($_SESSION['sesija']) || !$_SESSION['sesija'] == true){
    header('Location:http://localhost/phppamokos/PHP/tarpinisDarbas/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Tarpinis Darbas</title>
</head>
<body>

<?php
$current = '';
$ext = '';



if(isset($_POST['file-name'])) {
    $file = $_POST['file-name'];
 }
 elseif(isset($_GET['file-name'])) {
    $file = $_GET['file-name'];
 }
 else $file = '';


 if(isset($_POST['submit'])){
   include 'upload.php';
 }


 if(isset($_GET['ext'])) {
    $ext = $_GET['ext'];
 }

 

 if(isset($_POST['create-file']) && $_POST['new-file-name'] != '') {
    fopen('failai/' .$_POST['new-file-name']. '.txt', "w");
    $file = $_POST['new-file-name'] . '.txt';
 }
 if(isset($_POST['save'])) {
    $edit_text = $_POST['editor'];
    file_put_contents('failai/'.$file, $edit_text. "\n");
 }


 if($file) {
    $current = file_get_contents('failai/'.$file);
 }


 if(isset($_POST['delete'])) {
    @unlink('failai/'.$file);

 }
 if(isset($_POST['logout'])) {
   session_destroy();
   header('Location:http://localhost/phppamokos/PHP/tarpinisDarbas/login.php');
   exit;

 }

 ?>
 <form action="index.php"  method="post">

  <input id="red" class ="fas fa-3x fa-power-off"  type="submit" name = "logout" value="">
  </form>
 <div class = "center">
 <?php
 if ($handle = opendir('failai/')) {
    while (false !== ($entry = readdir($handle))) {
        if(preg_match('/\.(txt|jpg)$/', $entry, $arr)){
            echo '<a href="?file-name='.$entry.'&ext='.$arr[1].'">' .$entry. '</a><br>';
 }
    
    }
    closedir($handle);
 }


  
 
 
 ?>

<?php if($ext == 'jpg'):?>
        <img class = "img" src="failai/<?= $file ?>" alt="">
        <?php endif;?>
<h3><?= $file ?><?php if(isset($_POST['delete'])) echo ' file deleted' ?></h3>

<form action="index.php" method="post" enctype="multipart/form-data">

    <?php if ($ext == 'txt'):?>
 
<textarea class="forma" name="editor" file-name="<?php $_GET['file-name'] ?>" cols="100" rows="20"><?php echo $current?></textarea>

<?php endif;?>
      
<br>
<input type="submit" name = "save" file-name="<?php $_GET['file-name'] ?>" value="Save">
<input type="submit" name = "delete" file-name="<?php $_GET['file-name'] ?>" value="Delete">
<br>
<br>
<br>
<input type="text" class="white" name ="new-file-name" file-name="<?php $_GET['file-name'] ?>" value = ''>
<br>
<input type="submit" name = "create-file" file-name="<?php $_GET['file-name'] ?>" value="New File">
<br>
<input type="hidden" name="file-name" value="<?= $file ?>">
<br>
  
<br>

<form action="upload.php" method="post" enctype="multipart/form-data">
       <input type="file" name="fileToUpload" id="fileToUpload" class="inputfile inputfileToUpload" data-multiple-caption="{count} files selected" multiple="">
<label for="fileToUpload"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Choose a file…</span></label>
    <input type="submit" value="Upload Image" name="submit">
</form>
  

</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>