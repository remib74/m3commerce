<?php
include('siteConfig.php');
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
                       $page = basename($_SERVER['REQUEST_URI']);
                       //echo $_SERVER['REQUEST_URI'];
                       if ($page=='index.php'){
                        include 'inc/menu.php';
                       }
                    
                    ?>
                        
                          </div>
                    <div id="cart"><img src="template/m3style/imgs/cart.jpg"></div>
                </header>
                <?php
require('controller/controller.php');

if (isset($_GET['imgIndex'])) {
    if ($_GET['imgIndex'] == 'contactImages') {
        contactImages();
    }
}

if (isset($_GET['imgIndex'])) {
    if ($_GET['imgIndex'] == 'dessins') {
        dessins();
    }
}

?>
                 <?php 
 
    $page = basename($_SERVER['REQUEST_URI']);
    //echo $_SERVER['REQUEST_URI'];
    if ($page=='index.php'){
        require_once('view/frontend.php');
    }

 
 
                 
                  ?>
            </div>
        </div>


    </body>
</html>
