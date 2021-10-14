<?php



function contactImages()
{

    require('view/contact.php');
    
}

function dessins()
{

    require('view/dessin.php');
    
}
function infographies()
{

    require('view/infographie.php');
    
}

function peintures()
{

    require('view/peinture.php');
    
}
function pastels()
{

    require('view/pastel.php');
    
}
function sculptures()
{

    require('view/sculpture.php');
    
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
    







