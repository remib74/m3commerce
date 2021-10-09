<?php

/* 
 * m3commerce the cms that's strong
 * You can use, m3commerce for hobbies/business
 * justakefive[at]free.fr
 */

$monfichier = fopen('count/count.txt', 'r+');

 

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)

$pages_vues += 1; // On augmente de 1 ce nombre de pages vues

fseek($monfichier, 0); // On remet le curseur au début du fichier

fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

 

fclose($monfichier);

 

//echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
