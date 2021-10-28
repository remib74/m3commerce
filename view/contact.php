

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
        
        
        
        
		
        
        
        <link href="template/m3style/style/style.css" rel="stylesheet" type="text/css">
      
       
        <link rel="stylesheet" href="colorbox/colorbox.css" />

		
		



        
        
    </head>
    <body>
<div id="main">

            <div id="container">
 
       
 
                
             
         <div id="formulaire">
        
             <form action="inc/formC.php" method="post" enctype="text/plain">
       
       <label for="email">entrez votre email...</label><br/>
       
 <input type="text" name="email" class="champ"><br>
 <label for="message">votre message...</label><br/>
<textarea name="message" rows="8" cols="50" class="champ">vous souhaitez acquérir l'oeuvre <?php echo '" '.htmlspecialchars($_GET['rowTit']).' "';?></textarea><br>





<input type="submit" value="Envoyer le mail">
</form>
         </div></div></div>
        <!-- Include jQuery Library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <script src="colorbox/jquery.colorbox-min.js"></script>

        
        <script>

$(document).ready(function(){
    //Examples of how to assign the Colorbox event to elements
    
                    $(".imgG").colorbox({ transition:"elastic",speed:"50",retinaImage:true,fadeOut:"50" });
     
                    $(".contactI").colorbox({ transition:"elastic",speed:"50",retinaImage:true,fadeOut:"100" });
      
    //Example of preserving a JavaScript event for inline calls.
    $("#click").click(function(){ 
        $('#click').css({"background-color":"rgb(30,30,30,0.3)", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });
});


       

$(document).ready(function(){
    //Examples of how to assign the Colorbox event to elements
    
                    $(".imgG").colorbox({ transition:"elastic",speed:"50",retinaImage:true,fadeOut:"50" });
     
                    $(".contactI").colorbox({ transition:"elastic",speed:"50",retinaImage:true,fadeOut:"100" });
      
    //Example of preserving a JavaScript event for inline calls.
    $("#click").click(function(){ 
        $('#click').css({"background-color":"rgb(30,30,30,0.3)", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
        return false;
    });
});


       
       

    </body>
</html>