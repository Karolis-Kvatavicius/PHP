<html>


<head>



</head>

<body>


<div class = "forma">
<form action ="task11.php" method="POST">

<br>
<select name="taskOption">
<option value="1">First</option>
<option value="2">Second</option>
<option value="3">Third</option>
</select>

<br>
<input type="submit" value="Susumuoti">
</form>
</div>



<?php
$a='5';
$b='1';
$sum ='';
if(isset($_POST['taskOption'])){
    $taskOption = $_POST['taskOption'];
    switch ( $taskOption ) {
        case '1':
            $sum = $a + $b;
            echo 'suma '.$sum;
            break;
        case '2':
            echo 'value2<br/>';
            break;
        case 'value3':
            echo 'value3<br/>';
            break;
        default:
            # code...
            break;
    }
}
?>

</body>
</html>




