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
        <title>m3c login page</title>
        <link href="template/m3style/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
         echo'<div id="main">';

        echo '<div id="container">';
        echo '<div id="box_ini"><img src="template/m3style/imgs/logo.png"><h1>connectez vous</h1>';
        echo '<form method="post" action="log_admin.php">';
        echo'<label for="site_log">';
        echo'<div class=".title_putlog"> <input type="text" name="site_log" value="login" size="20"></div>';
        echo '</label>';
        echo'<label for="site_pass">';
        echo'<div class=".title_putlog"><input type="password" name="site_pass" value="mot de passe" size="20"></div>';
        echo '</label>';
        echo'<div class="title_putlog"><input type="submit" name="m3clog" value="se logger"></div>';
        echo'</form>';
        echo '</div></div>';
            ?>
    </body>
</html>
