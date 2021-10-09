<?php

/* 
 * m3commerce the cms that's strong
 * You can use, m3commerce for hobbies/business
 * justakefive[at]free.fr
 */ 
//echo $_POST['envoyer'];
require ('inc/setting_conn.php');
 $rowdel= htmlspecialchars($_POST['envoyer']); 
 $conn->exec("DELETE FROM rubriques WHERE id_rubrique=$rowdel");
 $conn->closeCursor();
 echo "effacée";
 header('Location: index.php'); 