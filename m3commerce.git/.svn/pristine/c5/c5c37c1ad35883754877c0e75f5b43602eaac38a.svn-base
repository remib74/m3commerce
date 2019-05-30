<?php
/* 
 * m3commerce the cms that's strong
 * You can use, m3commerce for hobbies/business
 * justakefive[at]free.fr
 */


if(isset($_POST['rubrique'])&&$_POST['rubrique']!=""){  
           

    require ('inc/setting_conn.php');
    $rubrique= htmlspecialchars($_POST['rubrique']);
    
    if (!is_dir('../img/prod/'.$rubrique)){
     mkdir("../img/prod/$rubrique", 0700);
    
           $conn->exec('INSERT INTO rubriques(rubrique_name) VALUES("'.$rubrique.'")');
           
           echo 'rubrique cr&eacute;&eacute;e';
         $query->closeCursor();
        $conn->closeCursor();;
          header('location:index.php');
           
           
           
       }
      }
        //require ('inc/setting_conn.php');
        //$rubrique= htmlspecialchars($_POST['rubrique']);
    
    /* if (is_dir('../img/prod/'.$rubrique)){
         
     $conn->exec('UPDATE rubriques SET rubrique_name=("'.$rubrique.'")');
           echo 'la rubrique existe d&eacute;ja !';
         $query=null;
        $conn=null;
          //header('location:index.php');
 }  */ 
else {
    $conn=null;
    header('location:index.php');
    
}
?>