<div id="main">
            <div id="container">
<header>
       
<div id="logo"><a href="index.php"><img src="template/m3style/imgs/logo.png"></a><p id="logotxt">m3commerce</p></div>
<div id="menu">
<?php
    
    if (isset($_GET['imgIndex'])) {
        if ($_GET['imgIndex']  !=='contactImages') {
            include 'menu.php';        
        }
    }
    $page = $_SERVER['QUERY_STRING'];
    //echo $_SERVER['REQUEST_URI'];
    if ($page===''){
        include 'menu.php'; 
        }
    
    
?>
</div>
<div id="cart"><img src="template/m3style/imgs/cart.jpg"></div>

</header>
