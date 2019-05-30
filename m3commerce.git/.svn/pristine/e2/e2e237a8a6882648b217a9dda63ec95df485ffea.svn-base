
<?php
//include'../inc/siteConfig.php';
/*
 * m3commerce the cms that's strong
 * You can use, m3commerce for hobbies/business
 * justakefive[at]free.fr
 */


if (isset($_POST['envoyer'])) {
    include ('inc/setting_conn.php');
    $title = htmlspecialchars($_POST['titre']);
    $format = htmlspecialchars($_POST['format']);
    $technique = htmlspecialchars($_POST['technique']);
    $prix = htmlspecialchars($_POST['prix']);
    $rubrique = htmlspecialchars($_POST['rubrique']);
    $requete='INSERT INTO m3_prod(title,format,technique,prix,rubrique) VALUES("' . $title . '","' . $format . '","' . $technique . '","' . $prix . '","' . $rubrique . '")';
    $q = $conn->prepare($requete);
    $q->execute();
    $fichier=$conn->lastInsertId();

    $tmp_file = $_FILES['image_file']['tmp_name'];
    
        $uploaddir = '../img/prod/';

        move_uploaded_file($tmp_file, $uploaddir . $rubrique.'/' . $fichier.'.jpg');

        }
        header('location:index.php');
    ?>
