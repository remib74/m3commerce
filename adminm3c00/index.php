<!DOCTYPE html>
<!--
m3commerce the cms that's strong
You can use, m3commerce for hobbies/business
justakefive[at]free.fr
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <h1>page d'admin</h1>
        <h2>créer une rubrique</h2>

       <form method="POST" action="creer_rubrique.php">
            <label>
                <input type="text" name="rubrique" value=""/>
            </label>
            <input type="submit" value="envoyer"/>
        </form>
           <h1>gérer les rubriques</h1>
           <div class="box-content">
           <?php 
           

           require ('inc/setting_conn.php');
           $sql="SELECT * FROM rubriques ORDER BY id_rubrique";
         
           
              	foreach  ($conn->query($sql) as $row) {
                $rowid=$row['id_rubrique'];
		echo "<div class='box-content'><form action='delrub.php' method='POST'><input type='submit' name='envoyer'  value='$rowid'><input type='hidden' name='$rowid' value='$rowid'></form>" ;
		echo "<div class='txt-rub'>".$row['rubrique_name']."</div></div>" ;

		}
               
           ?>
           </div>
        <h1>créer un produit</h1>
        <div class="box-content"><form method="post" enctype="multipart/form-data" action="creer_produit.php" >
            
                <input type="text" name="titre" value="titre"/>
            
                <input type="text" name="technique" value="technique"/>
            
                <input type="text" name="format" value="cm"/>
            
                <input type="text" name="prix" value="000"/>
            
                <select name="rubrique">
                <option value="peinture">peinture</option>
                <option value="pastel">pastel</option>
                <option value="infographie">infographie</option>
                <option value="dessin">dessin</option>
                <option value="sculpture">sculpture</option>
                </select>
            
            
            
            <input type="file" name="fichier" id="image_file"/>
           
            <input type="submit" value="uploader" name="envoyer"/>
        </form>
    </div>
  
        
        <div class="box-content">
        <?php $sqlprod="SELECT * FROM m3_prod ORDER BY id";
  
               
              	foreach  ($conn->query($sqlprod) as $row) {
                $rowid=$row['id'];
                $rowRub=$row['rubrique'];
                echo "<div class='box-content2'><form action='delprod.php' method='POST'><div style='float:left;height:40px;margin:10px;'><input type='submit' name='envoyer'  value='$rowid'></div><input type='hidden' name='$rowid' value='$rowid'></form>" .$row['title'].' '.$row['rubrique']."&nbsp;&nbsp;&nbsp;"."<img src='../img/prod/$rowRub/$rowid.jpg' width=30px height=30px>".
                "</div>";       

               
		}
                
                   $conn=null;  
?>
        </div>
    </body>
</html>
