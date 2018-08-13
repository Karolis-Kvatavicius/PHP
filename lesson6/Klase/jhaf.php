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
$file = 'text.txt';
if(!empty($_POST)){ //tikrini ar yra tekstas
$edit_text = $_POST['add'];
file_put_contents($file, $edit_text);
// file_put_contents($file, $edit_text, FILE_APPEND); // failui kurti 
// failui prideti  FILE_APPEND
}
echo '<br>';
echo '<br>';
// if ($handle = opendir('.')) {
//     while (false !== ($entry = readdir($handle))) {
//             echo $entry. '<br>';
//     }
//     closedir($handle);
//  }
// $get = '';


if (isset($_POST['Save'])) {
    file_put_contents($file, $edit_text."\n", FILE_APPEND);
}

if (isset($_POST['Edit'])) {
    file_get_contents($file);
}

if (isset($_POST['Confirm'])) {
    file_put_contents($file, $edit_text);
}



?>
<form action="index.php" method="post">
<textarea name="add" id="" cols="30" rows="10"><?php echo file_get_contents($file)?></textarea>
<br>
<input type="submit" name = "Save" value="Save">
<input type="submit" name = "Edit" value="Edit">
<input type="submit" name = "Confirm" value="Confirm ">
<input type="submit" name = "Delete" value="Delete">

</form>
</body>
</html>