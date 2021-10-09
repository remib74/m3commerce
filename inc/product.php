<html>
    <head>
        
        <link href="template/m3style/style/style.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
<?php
echo '<h1 class="zoomtitle">ZOOM</h1>';
echo '<div class="prodzoom">
<div class="img-prod">
                             
                                <a class=\'iframe\' href="001.php"><img src="img/prod/infographie/001.jpg"></a>
                            </div>

                            <div class="txt-prod">
                                <div class="t-prod">titre</div>
                                <div class="t-prod">format</div>
                                <div class="t-prod">tirage</div>
                                <div class="t-prod">prix</div>
                            </div>
                            <div class="buy"><img src="template/m3style/imgs/buy.jpg" onclick="contact.php?rowid=$rowid&rowRub=$rowRub&rowTit=$rowTit&rowFor=$rowFor&rowPri=$rowPri"></div>
                        </div>';

echo '<div id="prozoom"><img src="img/prod/infographie/001.jpg"></div>';
?></body>
</html>