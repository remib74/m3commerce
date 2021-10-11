<div class="produits">
                    <div class="produits-accueil">
                               <?php

    include('siteConfig.php');

      $sqlprod = "SELECT * FROM m3_prod ORDER BY rubrique"; 
     
     

        foreach ($conn->query($sqlprod) as $row) {
            $rowid = $row['id'];
            $rowRub = $row['rubrique'];
            $rowTit = $row['title'];
            $rowFor = $row['format'];
            $rowPri = $row['prix'];
              echo 
        "<div class='prod'>" .
        "<div class='img-prod'>".
        "<a class='imgG' href='public/img/prod/$rowRub/$rowid.jpg'><img src='public/img/prod/$rowRub/$rowid.jpg' ></a></div>".
        

            "<div class='txt-prod'>"."<div class='t-Rub'>$rowRub </div>".
                                       "<div class='t-prod'>$rowTit </div>".
                                "<div class='t-prod'> $rowFor</div>".
                                "<div class='t-prod'>$rowPri <span>&euro;</span></div>".
                            "</div>".
                             "<div class='buy'>".
                    "<a href='?imgIndex=contactImages&rowid=$rowid&rowRub=$rowRub&rowTit=$rowTit&rowFor=$rowFor&rowPri=$rowPri' class='iframe'  ><img src='template/m3style/imgs/buy.jpg'/></div></a>".
                    "</div>";
}
  $conn=null;
							?>
      
                          

      


               