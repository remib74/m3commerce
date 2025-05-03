<?php

/* 
 * m3commerce the cms that's strong
 * You can use, m3commerce for hobbies/business
 * justakefive[at]free.fr
 */ 
//echo $_POST['envoyer'];
require ('inc/setting_conn.php');
 $rowdel= htmlspecialchars($_POST['envoyer']); 
 $conn->exec("DELETE FROM m3_prod WHERE id=$rowdel");
 echo "effacée";
 $conn=null;
 header('Location: index.php'); 