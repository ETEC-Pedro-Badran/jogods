<?php

   $files = scandir(".");

  foreach ($files as $file) {
     if ($file!='index.php' && $file!='player_abastract.class.php') {
        print($file);
     }

  }


?>
<html>

   <head>
       <meta charset="utf-8">  
       <title>DS PHP Game</title>
       <link rel="" href="css/index.css">
   </head>    
   <body>
      <div id='player1'>
       <?php
          $player1 = new Evaldao();
          echo $player1->desenhar();
       ?>       
      </div> 

   </body>    

</html>