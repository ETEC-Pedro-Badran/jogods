<?php


require_once("Catatau.php");
require_once("Cramunhão.class.php");
require_once("DestruidorDeSonhos.class.php");
require_once("DevoradorDeMentes.php");
require_once("evaldao.class.php");
require_once("gabs.class.php");
//require_once("ikari.class.php");
require_once("julia.class.php");
require_once("niveli.class.php");
//require_once("princesaAK.class.php");
require_once("red.class.php");
require_once("rocky.class.php");
require_once("sabrina.class.php");
require_once("sparkyguy.class.php");
require_once("tryde.player.class.php");
require_once("umone.class.php");

$players = [
   new Catatau(),
   new Cramunhão(),
   new DestruidorDeSonhos(),
   new DevoradorDeMentes(),
   new Gabriel(),
   new Julia(),
   new Niveli(),
   new Red(),
   new Rocky(),
   new Sabrina(),
   new SparkyGuy(),
   new Tryde(),
   new Umone()
];



?>
<html>

   <head>
       <meta charset="utf-8">  
       <title>DS PHP Game</title>
       <link rel="" href="css/index.css">
   </head>    
   <body>
       <?php
          foreach($players as $player) {
              
             echo($player->desenhar());
          }
       ?>  
      </div> 

   </body>    

</html>