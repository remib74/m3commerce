<?php
include'siteConfig.php';
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
        <title><?php echo $nomdusite; ?></title>
<link rel="stylesheet" href="colorbox/colorbox.css" />
	    
<link href="template/m3style/style/style.css" rel="stylesheet" type="text/css">
<link href="colorbox/colorbox.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>		
<script src="colorbox/jquery.colorbox.js"></script>
        <script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
								$(".iframe").colorbox({iframe:true, width:"60%", height:"100%"});
                                $(".imgG").colorbox({ transition:"elastic",speed:"50",height:"75%",width:"50%",retinaImage:true,fadeOut:"50" });
				 
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"rgb(30,30,30,0.3)", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
    </head>
    <body>
<?php
//include_once 'inc/count.php';
?>
        <div id="main">

            <div id="container">
                <header>

                    <div id="logo"><img src="template/m3style/imgs/logo.png"><p id="logotxt">m3commerce</p></div>
                    <div id="menu">
                    <?php
                    include 'inc/menu.php';
                    ?>
                        
                          </div>
                    <div id="cart"><img src="template/m3style/imgs/cart.jpg"></div>
                </header>
                 <div class="produits">
                    <div class="produits-accueil">
                               <?php
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
        "<a class='imgG' href='img/prod/$rowRub/$rowid.jpg'><img src='img/prod/$rowRub/$rowid.jpg' ></a></div>".
        

            "<div class='txt-prod'>"."<div class='t-Rub'>$rowRub </div>".
                                       "<div class='t-prod'>$rowTit </div>".
                                "<div class='t-prod'> $rowFor</div>".
                                "<div class='t-prod'>$rowPri <span>&euro;</span></div>".
                            "</div>".
                             "<div class='buy'>".
                    "<a href='contact.php?rowid=$rowid&rowRub=$rowRub&rowTit=$rowTit&rowFor=$rowFor&rowPri=$rowPri' class='iframe'  ><img src='template/m3style/imgs/buy.jpg'/></div></a>".
                    "</div>";
}
  $conn=null;
							?>
      
                          

      


                </div>
            </div>
            </div>
        </div>


    </body>
</html>
