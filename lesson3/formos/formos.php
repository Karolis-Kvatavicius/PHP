<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Formos</title>
        <link rel="stylesheet" href="css/style.css"
    </head>
    <body>
<?php
$n = 8;
$i = 0;

for($i=1; $i<=$n; $i++){

    echo "<pre>";   
    echo str_repeat("&nbsp;", $n-$i);
    echo str_repeat("#&nbsp;", $i);
}

echo '<br>';
echo '<br>';
echo "<br />";

echo "<pre>";   
    for($i=1;$i<=7;$i++){
        for($j=1;$j<=$i;$j++){
                    echo "^^";
        }
        echo "<br />";
    }
?>
<center>
<div class = "empty">
<?php
echo "<pre>"; 
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
    </center>
    </body>
    </html>