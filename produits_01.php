
<!DOCTYPE html>
<!--
m3commerce the cms that's strong
You can use, m3commerce for hobbies/business
justakefive[at]free.fr
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>produits</title>
    </head>
    <body>
        <?php
        echo "<div class='produits'>" .
        "<div class='produits-accueil'>" .
        "<div class='subtitle1'><h1>Infographies</h1></div>" .
        "<div class='prod'>" .
        "<div class='img-prod'>";


        $sqlprod = "SELECT * FROM m3_prod ORDER BY id";

        foreach ($conn->query($sqlprod) as $row) {
            $rowid = $row['id'];
            $rowRub = $row['rubrique'];

            echo "</div>";

            echo "<div class='txt-prod'>".
                                       "<div class='t-prod'>titre</div>".
                                "<div class='t-prod'>format</div>".
                                "<div class='t-prod'>tirage</div>".
                            "</div>".
                             "<div class='buy'>".
                            "<img src='../img/prod/$rowRub/'.$rowid.'.jpg' width = 30px height = 30px>".
							"</div>";
        }				
	  $conn=null;					
        ?>
    </body>
</html>
