<?php



function contactImages()
{

    require('view/contact.php');
    
}

function dessins()
{

    require('model/siteConfig.php');         
    //echo ($ImagesAll);
    $sqlDessins = "SELECT * FROM m3_prod WHERE rubrique='dessin' ORDER BY id";
    foreach ($conn->query($sqlDessins) as $row) {
        $rowid = $row['id'];
        $rowRub = $row['rubrique'];
        $rowTit = $row['title'];
        $rowFor = $row['format'];
        $rowPri = $row['prix'];
        

require('view/frontEnd.php');

}
    
}
function infographies()
{

    require('model/siteConfig.php');         
    
    $sqlInfographies = "SELECT * FROM m3_prod WHERE rubrique='infographie' ORDER BY id";
    foreach ($conn->query($sqlInfographies) as $row) {
        $rowid = $row['id'];
        $rowRub = $row['rubrique'];
        $rowTit = $row['title'];
        $rowFor = $row['format'];
        $rowPri = $row['prix'];
        

require('view/frontEnd.php');
    
}
}

function peintures()
{

    require('model/siteConfig.php');         
    
    $sqlPeintures = "SELECT * FROM m3_prod WHERE rubrique='peinture' ORDER BY id";
    foreach ($conn->query($sqlPeintures) as $row) {
        $rowid = $row['id'];
        $rowRub = $row['rubrique'];
        $rowTit = $row['title'];
        $rowFor = $row['format'];
        $rowPri = $row['prix'];
        

require('view/frontEnd.php');
    
}
}
function pastels()
{

    require('model/siteConfig.php');         
    
    $sqlPastels = "SELECT * FROM m3_prod WHERE rubrique='pastel' ORDER BY id";
    foreach ($conn->query($sqlPastels) as $row) {
        $rowid = $row['id'];
        $rowRub = $row['rubrique'];
        $rowTit = $row['title'];
        $rowFor = $row['format'];
        $rowPri = $row['prix'];
        

require('view/frontEnd.php');
    
}
}
function sculptures()
{


    require('model/siteConfig.php');         
    
    $sqlSculptures = "SELECT * FROM m3_prod WHERE rubrique='sculpture' ORDER BY id";
    foreach ($conn->query($sqlSculptures) as $row) {
        $rowid = $row['id'];
        $rowRub = $row['rubrique'];
        $rowTit = $row['title'];
        $rowFor = $row['format'];
        $rowPri = $row['prix'];
        

require('view/frontEnd.php');
    
}
}

function listImages()
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
    







