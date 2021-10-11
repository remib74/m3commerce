<?php
include'inc/siteConfig.php';
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="colorbox/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				
                                $(".imgG").colorbox({ transition:"elastic",speed:"50",height:"75%",width:"50%",retinaImage:true,fadeOut:"50" });
                                $(".iframe").colorbox({iframe:true, width:"60%", height:"100%"});
                                $(".contactI").colorbox({ transition:"elastic",speed:"50",height:"50%",width:"30%",retinaImage:true,fadeOut:"50" });
				  
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"rgb(30,30,30,0.3)", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<link href="template/m3style/style/style.css" rel="stylesheet" type="text/css">
<link href="colorbox.css" rel="stylesheet" type="text/css">

    </head>
    <body>
    <?include 'inc/header.php';?>
                   
                  
                              
                   </div>
          <div class="produits">
             <div class="produits-accueil">
                       
                 <?php
                              include_once 'inc/produits_peinture.php';
                                   ?>
                </div>
                     
            </div>
            </div>
        </div>


    </body>
</html>
