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
$site_name=htmlspecialchars($_POST['site_name']);
$site_host=htmlspecialchars($_POST['site_host']);
$site_bdd=htmlspecialchars($_POST['site_bdd']);
$site_user=htmlspecialchars($_POST['site_user']);
$site_pass=htmlspecialchars($_POST['site_pass']);
$site_admin=htmlspecialchars($_POST['site_admin']);
$siteAdmin_pass=htmlspecialchars($_POST['siteAdmin_pass']);
$siteAdmin_passconf=htmlspecialchars($_POST['siteAdmin_passconf']);
$siteAdmin_email=htmlspecialchars($_POST['siteAdmin_email']);

//fonction creation fichier conf

//fonction mysql pdo pour inscription dans site Config
if(isset($site_bdd)){
    
echo '<div id="installok"><a href="../index.php"><img src="install/img/logo.png"></a><br/><a href="../index.php">connection bdd ok : '.$site_name.' est pr&ecirc;t !</a></div><br/>';

//fonction creation fichier conf


$fichierConf = fopen('../siteConfig.php', 'w+');

fseek($fichierConf, 0);
fputs($fichierConf,'<?php
$nomdusite = "'.$site_name.'";
$siteAdEmail = "'.$siteAdmin_email.'";

            
$servername = "'.$site_host.'";
$username = "'.$site_user.'";
$password = "'.$site_pass.'";

try {
    $conn = new PDO("mysql:host=$servername;dbname='.$site_bdd.'", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    ?>' );
}
?>
    </body>
</html>
