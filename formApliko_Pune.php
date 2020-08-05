<?php

session_start();

?>
<?php

require 'include/db_connect.php';

?>

<div id="container">
           <?php
           
           include 'include/header.php';

           ?>
            
            <div class="header2">
            
            <?php
            
            include 'include/header2.php';
            ?>
            </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apliko per Pune</title>
    <link rel="stylesheet" type="text/css" href="css/formApliko_Pune.css">
</head>
<body>
    
</body>
</html>
<div class="formApliko_Pune">
    <h1>Formulari per Aplikim ne Pune</h1><br>

<label for="pozita">Zgjedh poziten per te cilen doni te aplikoni</label><br>
<select name="pozita" id="pozita">

<option value="menagjer">Menagjer</option>
<option value="kontabilist">Kontabilist</option>
<option value="depoist">Depoist</option>
<option value="vozites">Vozites</option>
<option value="punetor">Punetor</option>
<option value="teknik">Teknik</option>
<option value="pastrues">Pastrues</option>
</select><br><br>

<label for="emri">Emri dhe Mbiemri</label><br>
<input type="text" name="name" id="name"><br><br>
<label for="adresa">Adresa</label><br>
<textarea name="adresa" id="adresa" cols="30" rows="3"></textarea><br><br>
<label for="email">Email</label><br>
<input type="text" name="email" id="email"><br>





</div>




            </div>
