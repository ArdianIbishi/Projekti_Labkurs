<style>

th{
width:200px;
    margin:40px;
    padding:10px 30px 10px 30px;
    background-color:#aabbdd;
    text-align:center;
}

table{
    margin:10px 50px 40px 55px;
}
td{
    height:150px;
    width:200px;
    color:black;
    text-align:center;

}
td img{
    height:150px;
    width:200px;    
    
}


</style>



<?php
require 'include/db_connect.php';
?>


<?php

$sql='SELECT* FROM libri';

$query=$pdo ->query($sql);

$users=$query -> fetchAll();


?>




<!DOCTYPE html>
<html>
    <head>
        <title>Projekti</title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" href="css/projekti1.css">
        <link rel="Stylesheet" href="css/dashboard.css">
        
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

            
    </head>

    <body>
        <div id="container">
            
           <?php
           
           include 'include/header.php';

           ?>
           <?php
           
           include 'include/dashboardLineHr.php';

           ?>

           <div id="menuDashboard">
<?php
           
           include 'include/dashboard.php';

           ?>
           
           <p>Kategoria : Libri</p>
           <a href="shtoLibra.php"> <div id="buttonShtoProduktin"><span style="font-size:23px;margin-right:4px"><b>+</b></span>Shto Produkte</div></a>

<table>
<thead>
<tr>

<th>Image</th>
<th>Emri i Artikullit</th>
<th>Cmimi</th>
<th>Edit</th>
<th>Delete</th>

</tr>

</thead>
<?php foreach($users as $user): ?>

<tbody>
<tr>
<td><img src="uploads/<?php echo $user['image'];?>" /></td>
<td><?php echo $user['titulli']; ?></td>
<td><?php echo $user['teksti']; ?></td>

<!--
<td><a href="edit_Libri.php?id=<?php echo $user['id'];?>">Edit</a> </td>

<td><a href="delete_Libri.php?id=<?php echo $user['id'];?>">Delete</a> </td>
-->
<td><a href="edit_Libri.php?id=<?php echo $user['id'];?>" onclick="return edit()">Edit</a> </td>

<td><a href="delete_Libri.php?id=<?php echo $user['id'];?>" onclick="return deletefunction()">Delete</a> </td>
</tr>

<?php endforeach; ?>
</tbody>


</table>



</div>


           <script src="js/dashboard.js"></script>
           </body>