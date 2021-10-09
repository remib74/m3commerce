<?php

if (isset($_POST['envoyer'])) {
    require ('inc/setting_conn.php');
    $title = htmlspecialchars($_POST['titre']);
    $format = htmlspecialchars($_POST['format']);
    $technique = htmlspecialchars($_POST['technique']);
    $prix = htmlspecialchars($_POST['prix']);
    $rubrique = htmlspecialchars($_POST['rubrique']);
    $format = htmlspecialchars($_POST['format']);
    $requete='INSERT INTO m3_prod(title,format,technique,prix,rubrique) VALUES("' . $title . '","' . $format . '","' . $technique . '","' . $prix . '","' . $rubrique . '")';
    $q = $conn->prepare($requete);
    $q->execute();
    $fichier=$conn->lastInsertId();
   

   /*$tmp_file = $_FILES['file']['tmp_name'];
   $name_file = $_FILES['file']['name'];
 
 
    if( !is_uploaded_file($tmp_file) )
    {
          exit("The file can not be found");
    }
 
    if( !move_uploaded_file($tmp_file, $name_file) )
    {
          exit("Impossible to move the file to $name_file");
    }
 
    echo "The file has been uploaded and can be found at  $name_file";
}*/
 

    
    
   
   
        $tmp_file = $_FILES['fichier']['tmp_name'];
    
    
        $uploaddir = '../img/prod/';


        //move_uploaded_file($fichier, $uploaddir);

         /*if(is_dir('produits/')) {
          echo 'Le dossier existe';
          } else {
          echo 'Le dossier n\'existe pas';*/
          
            //mkdir("../img/prod/$rubrique", 0700);
        
        move_uploaded_file($tmp_file, $uploaddir.$rubrique.'/'.$fichier.'.jpg');
        //$q=null;
        $conn=null;
       
        //$q->closeCursor();
        //$conn->closeCursor();
       
        header('location:index.php');
        
        }
        ?>