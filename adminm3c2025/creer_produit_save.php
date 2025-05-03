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
    
    
   
   
        $tmp_file = $_FILES['fichier']['tmp_name'];
        
    
        $uploaddir = '../public/img/prod/';

        
        move_uploaded_file($tmp_file, $uploaddir.$rubrique.'/'.$fichier.'.jpg');
        
        $q=null;
        $conn=null;
       
        header('location:index.php');
        
        }
        ?>