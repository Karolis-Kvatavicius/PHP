<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    file_put_contents('failai/' .$file, $edit_text. "\n");
 }


 if($file) {
    $current = file_get_contents('failai/' .$file);
 }


 if(isset($_POST['delete'])) {
    @unlink('failai/' .$file);
    $current = '';
 }

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
        <img src="failai/<?= $file ?>" alt="">
        <?php endif;?>
<h3 id="currentFile"><?= $file ?><?php if(isset($_POST['delete'])) echo ' file deleted' ?></h3>
<form action="index.php" method="post" enctype="multipart/form-data">
    <?php if ($ext == 'txt'):?>
<textarea name="editor" file-name="<?php $_GET['file-name'] ?>" cols="30" rows="10"><?php echo $current?></textarea>

<?php endif;?>
      
<br>
<input type="submit" name = "save" file-name="<?php $_GET['file-name'] ?>" value="Save">
<input type="submit" name = "delete" file-name="<?php $_GET['file-name'] ?>" value="Delete">
<br>
<br>
<br>
<input type="text" name ="new-file-name" file-name="<?php $_GET['file-name'] ?>" value = ''>
<br>
<input type="submit" name = "create-file" file-name="<?php $_GET['file-name'] ?>" value="New File">
<br>
<input type="hidden" name="file-name" value="<?= $file ?>">
<br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
<br>
</form>
</body>
</html>