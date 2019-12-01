<!DOCTYPE html>
<!--
m3commerce the cms that's strong
You can use, m3commerce for hobbies/business
justakefive[at]free.fr
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>m3commerce installation</title>
        <link href="install/style_ini.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
        echo '<div id="box_install"><img src="install/img/logop.png"></a>';
        echo'<div id="form_ini">';
        echo '<form method="post" action="install_site.php">';
        echo'<label for="site_name">';
        echo '<div class="title_put">nom du site :</div><div class="champ_txt"> <input type="text" size="50" value="" name="site_name"></div>';
        echo '</label>';
        echo'<label for="site_host">';
        echo '<div class="title_put">nom du serveur :</div> <div class="champ_txt"><input type="text" size="50" value="" name="site_host"></div>';
        echo '</label>';
          echo'<label for="site_bdd">';
        echo '<div class="title_put">bdd mysql :</div> <div class="champ_txt"><input type="text" size="50" value="" name="site_bdd"></div>';
        echo '</label>';
             echo'<label for="site_user">';
        echo '<div class="title_put">nom de l\'admin :</div> <div class="champ_txt"><input type="text" size="50" value="" name="site_user"></div>';
        echo '</label>';
               echo'<label for="site_pass">';
        echo '<div class="title_put">mot de passe :</div> <div class="champ_txt"><input type="text" size="50" value="" name="site_pass"></div>';
        echo '</label>';
          echo'<label for="site_admin">';
        echo '<div class="title_put">admin du site :</div> <div class="champ_txt"><input type="text" size="50" value="" name="site_admin"></div>';
        echo '</label>';
        echo'<label for="siteAdmin_pass">';
        echo '<div class="title_put">mot de passe de l\'admin :</div> <div class="champ_txt"><input type="text" size="50" value="" name="siteAdmin_pass"></div>';
        echo '</label>';
          echo'<label for="siteAdmin_passconf">';
        echo '<div class="title_put">confirmer mot de passe :</div> <div class="champ_txt"><input type="text" size="50" value="" name="siteAdmin_passconf"></div>';
        echo '</label>';
            echo'<label for="siteAdmin_email">';
        echo '<div class="title_put">email :</div> <div class="champ_txt"><input type="text" size="50" value="" name="siteAdmin_email"></div>';
        echo '</label>';
        echo '<br/><input type="submit" value="installer">';
            echo '<input type="reset" value="effacer">';
        echo '</form>';
        echo'</div>';
        echo'</div>';
        ?>
    </body>
</html>