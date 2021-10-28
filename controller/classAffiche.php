<?php

class Affich{

public function contactImages()
{
    $oeuvreId= htmlspecialchars($_GET['rowid']);
$oeuvreRub= htmlspecialchars($_GET['rowRub']);
$oeuvreTit= htmlspecialchars($_GET['rowTit']);
$oeuvreFor= htmlspecialchars($_GET['rowFor']);
$oeuvrePri= htmlspecialchars($_GET['rowPri']);
echo" <p>";
echo $oeuvreRub.' '.$oeuvreTit.' '.$oeuvreFor.' '.$oeuvrePri.'&euro;'.'<br/>';
echo "<img src='public/img/prod/$oeuvreRub/$oeuvreId.jpg' width='50%' height='auto' >";
echo" </p>";
    require('view/contact.php');
    
}

public function rubAffich($rub)
{
    //$rub=htmlspecialchars($_GET['imgIndex']);    
    
    require('model/siteConfig.php');         
    //echo ($ImagesAll);
    $sqlOeuvres = "SELECT * FROM m3_prod WHERE rubrique='$rub' ORDER BY id";
    foreach ($conn->query($sqlOeuvres) as $row) {
        $rowid = $row['id'];
        $rowRub = $row['rubrique'];
        $rowTit = $row['title'];
        $rowFor = $row['format'];
        $rowPri = $row['prix'];
        

require('view/frontEnd.php');

    }
}

public function listImages()
{  

    require('model/siteConfig.php');         
            //echo ($ImagesAll);
            
            foreach ($conn->query($sqlprod) as $row) {
                $rowid = $row['id'];
                $rowRub = $row['rubrique'];
                $rowTit = $row['title'];
                $rowFor = $row['format'];
                $rowPri = $row['prix'];
                

    require('view/frontEnd.php');
   
}
}
}