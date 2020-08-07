
<?php

session_start();

?>
<script>
var numri=0;
function zvogloSasin(){
    
    numri--;
    document.getElementsByClassName("p").innerHTML=numri;
}
function rritSasin(){
    
    numri++;
    document.getElementsByClassName("p").innerHTML=numri;
}


</script>
<style>
#artikulliShitje{
    width:100%;
    display:flex;
    justify-content: center;
    margin:30px;
 
overflow: hidden;  
text-align:center;
}
#porositProduktin{
    margin-left:40px;

}
#klik{
    background-color:blue;
    width:130px;
    height:40px;
    display:flex;
    align-items:center;
    padding:10px;
    margin-left:65px;
    color:white;
    
}

#klik:hover{
    background-color:#aabbdd;
    color:blue;
    
}
</style>

<?php

require 'include/db_connect.php';


$query = $pdo -> query('SELECT * from shtepia');

$users =$query -> fetchAll();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projekti</title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" href="css/kategorite3.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            
    </head>

    <body>
        <div id="container">
           <?php
           
           include 'include/header.php';

           ?>
            
            <div class="header2">
            
            <?php
            
            include 'include/header2.php';
            ?>
            </div>
            <div class="header3">
            <?php
                 include 'include/kategoriadown.php';
                 ?>
                 <h2 style="margin-left:20px;">Kategoria: Shtepia</h2>
                 </div>
                 <?php

require 'include/db_connect.php';
if(!isset($_GET['id'])){
    echo "<style>#artikulliShitje{display:none;}</style>";
    $id=0;
}

if(isset($_GET['id']))

{
    $id = $_GET['id'];

}




$sql= 'SELECT * from shtepia WHERE id = :id';

$query = $pdo -> prepare($sql);
$query -> execute(['id' => $id]);

$usera = $query -> fetch();
?>


<div id="artikulliShitje">
<div id="artikulli1">
                     <div class="image"><img src="uploads/<?php echo $usera['image'];?>" /></div>
                     <div class="emri"><?php echo $usera['titulli'];?></div>
                     <div class="cmimi"><?php echo $usera['teksti'];?>€uro</div>
                     
                 </div>
                 <div id="porositProduktin">
                 <br>
                 <p>Transporti ne tere Republiken e Kosoves</p>
                 <br>
                 <h2>Dergohet nga <span style="color:red;">3-48 ore<span></h2>
                 <br>
                 <p>Gjendja e produktit: I ri</p>
                 <br>
                 <p>I disponueshem</p>
                 <br>
                 <br>
                 <div><a href="porositPajisjeshtepiake.php?id=<?php echo $usera['id'];?>"><div id="klik">Porosit me 1 Klik</div></a> </div>
            
                <!-- <button onclick="zvogloSasin()"><b>-<b></button><button onclick="rritSasin()"><b>+<b></button> -->
                 
                 </div>
           </div>
                 
            <div class="middlecontainer">
            
            <?php foreach($users as $user):?>
                 
                 <div id="artikulli">
                 <a href="kategoriaShtepia.php?id=<?php echo $user['id'];?>"style="text-decoration:none;">
                     <div class="image"><img src="uploads/<?php echo $user['image'];?>" /></div>
                     <div class="emri"><?php echo $user['titulli'];?></div>
                     <div class="cmimi"><?php echo $user['teksti'];?>€uro</div>
                     </a> 
                     
                 </div>
                     
                 <?php endforeach; ?>
                 
            </div>
           
            <div class="footer">
            <?php   
            include 'include/footer.php'; 
            ?>
            </div>
            
        </div>
    </body>
</html>
