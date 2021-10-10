<?php
    
    session_start();
    
    
    // Include the IconCaptcha classes.
    require('src/captcha-session.class.php');
    require('src/captcha.class.php');

    use IconCaptcha\IconCaptcha;

    // Set the IconCaptcha options.
    IconCaptcha::options([
        'iconPath' => dirname(__FILE__) . './assets/icons/', // required, change path according to your installation.
        //'themes' => [
        //    'black' => [
        //        'icons' => 'light', // Which icon type should be used: light or dark.
        //        'color' => [20, 20, 20], // Array contains the icon separator border color, as RGB.
        //    ]
        //],
        'messages' => [
            'wrong_icon' => 'You\'ve selected the wrong image.',
            'no_selection' => 'No image has been selected.',
            'empty_form' => 'You\'ve not submitted any form.',
            'invalid_id' => 'The captcha ID was invalid.',
            'form_token' => 'The form token was invalid.'
        ],
        'image' => [
            'amount' => [ // min & max can be 5 - 8
                'min' => 5,
                'max' => 8
            ],
            'rotate' => true,
            'flip' => [
                'horizontally' => true,
                'vertically' => true,
            ],
            'border' => true
        ],
        'attempts' => [
            'amount' => 5,
            'timeout' => 60 // seconds.
        ],
        'token' => true
    ]);
    
    // If the form has been submitted, validate the captcha.
    if(!empty($_POST)) {
        if(IconCaptcha::validateSubmission($_POST)) {
            // Captcha submission was valid.
        } else {
            // Captcha submission was not valid.
        }
    }
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
        
        <link href="assets/css/icon-captcha.min.css" rel="stylesheet" type="text/css">
        
        
		
        <link href="assets/demo.css" rel="stylesheet" type="text/css">
        
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




<?php 
  
$oeuvreId= htmlspecialchars($_GET['rowid']);
$oeuvreRub= htmlspecialchars($_GET['rowRub']);
$oeuvreTit= htmlspecialchars($_GET['rowTit']);
$oeuvreFor= htmlspecialchars($_GET['rowFor']);
$oeuvrePri= htmlspecialchars($_GET['rowPri']);
echo" <p>";
echo $oeuvreRub.' '.$oeuvreTit.' '.$oeuvreFor.' '.$oeuvrePri.'&euro;'.'<br/>';
echo "<img src='public/img/prod/$oeuvreRub/$oeuvreId.jpg' width='50%' height='auto' >";
echo" </p>";
?>


<input type="submit" value="Envoyer le mail">
</form>
         </div></div></div>
         <!-- fichier script pour le captcha-->
 
        <!-- The IconCaptcha will be rendered in this element - REQUIRED -->
        <div class="iconcaptcha-holder" data-theme="light"></div>
        
        <!-- Include jQuery Library -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="assets/demo.js" type="text/javascript"></script>
        <script src="colorbox/jquery.colorbox-min.js"></script>

        <!-- Include IconCaptcha script - REQUIRED -->
        <script src="assets/js/icon-captcha.min.js" type="text/javascript"></script>

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


        <!-- Include IconCaptcha script - REQUIRED -->
        <script src="assets/js/icon-captcha.min.js" type="text/javascript"></script>

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
</script>

        <!-- Initialize the IconCaptcha - REQUIRED -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('.iconcaptcha-holder').iconCaptcha({
                    general: {
                        validationPath: 'src/captcha-request.php',
                        fontFamily: 'Poppins',
                        credits: 'hide',
                    },
                    security: {
                        clickDelay: 500,
                        hoverDetection: true,
                        enableInitialMessage: true,
                        initializeDelay: 500,
                        selectionResetDelay: 3000,
                        loadingAnimationDelay: 1000,
                        invalidateTime: 1000 * 60 * 2,
                    },
                    messages: {
                        initialization: {
                            verify: 'Verify that you are human.',
                            loading: 'Loading challenge...',
                        },
                        header: 'Select the image displayed the <u>least</u> amount of times',
                        correct: 'Verification complete.',
                        incorrect: {
                            title: 'Uh oh.',
                            subtitle: "You've selected the wrong image."
                        },
                        timeout: {
                            title: 'Please wait 60 sec.',
                            subtitle: 'You made too many incorrect selections.'
                        }
                    }
                })
               
            });
        </script>

       
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').submit(function(e) {
                    e.preventDefault();

                    // Get the form element.
                    const form = $(this);

                    // Perform the AJAX call.
                    $.ajax({
                        type: 'POST',
                        url: form.attr('action'),
                        data: form.serialize()
                    }).done(function (data) {
                        $('.message').html(data);
                    }).fail(function () {
                        console.log('Error: Failed to submit form.')
                    });

                   
                });
            });
        </script>
<!-- fin fichier script pour le captcha-->

    </body>
</html>