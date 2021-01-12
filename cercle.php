<?php
     $rayon=rand(0.250);
     define("PI",3.4);
     echo $rayon;
     $aire= PI *($rayon*$rayon);
     $phrase="l'aire du cercle de rayon $rayon est $aire";
     $circonference=2*PI*$rayon;

     echo $aire;
     echo $phrase;
     echo $circonference;

     echo "le rayon du cercle est de $rayon <br/>";
     echo "l'aire du cercle est de $aire <br/>";
     echo "la circonference du cercle est de $circonference <br/>";
     ?>