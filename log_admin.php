<?php
include'siteConfig.php';
$site_log=htmlspecialchars($_POST['site_log']);
$site_pass=sha1(htmlspecialchars($_POST['site_pass']));

if(isset($site_log)&&isset($site_pass)){
        //echo 'login exist';
         //echo 'pass successfull';
         
 $reponse = $conn->query('SELECT nom, pass FROM user');   
 
 while ($donnees = $reponse->fetch())
{
    //On affiche les données dans le tableau
     $login="$donnees[nom]";
     $pass="$donnees[pass]";
     
     if($site_log==$login && $site_pass==$pass){
         
         echo 'logins are equal';
          header('Location: adminm3c/index.php');
         
     }
    else{
        
        echo 'mauvais login ou password';
        
    }
}
  $conn=null;
 
}
?>
<!DOCTYPE html>
<!--
m3commerce the cms that's strong
You can use, m3commerce for hobbies/business
justakefive[at]free.fr
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        ?>
    </body>
</html>
