<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Homework</title>
        <link rel="stylesheet" href="css/style.css"
    </head>
    <body>

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
    </center>

    </body>
    </html>