<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Extra1</title>
    </head>
    <body>
        <div class = "change">
<?php
echo "<pre>";
for ($i = 1; $i < 21; $i++) {
    for ($j = $i; $j < 21; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '<span style="color: rgb(' .rand(0, 256).','.rand(0, 256).','. rand(0, 256).' ">&nbsp&block;</span>';
    echo "<br>";
}


$n = 21;
for ($i = 21; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
    echo '<span style="color: rgb(' .rand(0, 256).','.rand(0, 256).','. rand(0, 256).' ">&nbsp&block;</span>';
    echo "<br>";
}
echo "</pre>";
?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>