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

$sql='SELECT* FROM porosia';

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
          <br>
          <br> 
           <p>Porosite e bera nga klientet</p>
          
<table>
<thead>
<tr>


<th>Emri i Artikullit</th>
<th>Cmimi</th>
<th>Emri i klientit</th>
<th>Email</th>
<th>Telefoni</th>
<th>Adresa</th>
<th>Sasia e porositur</th>
<th>Data e porosise</th>
<th>Edit</th>
<th>Delete</th>

</tr>

</thead>
<?php foreach($users as $user): ?>

<tbody>
<tr>

<td><?php echo $user['titulli']; ?></td>
<td><?php echo $user['teksti']; ?></td>

<td><?php echo $user['emri']; ?></td>

<td><?php echo $user['email']; ?></td>

<td><?php echo $user['telefoni']; ?></td>

<td><?php echo $user['adresa']; ?></td>

<td><?php echo $user['sasia']; ?></td>

<td><?php echo $user['data_porosise']; ?></td>
<!--
<td><a href="edit_Porosia.php?id=<?php echo $user['id'];?>">Edit</a> </td>

<td><a href="delete_Porosia.php?id=<?php echo $user['id'];?>">Delete</a> </td>
-->

<td><a href="edit_LibriShitjes.php?id=<?php echo $user['id'];?>" onclick="return edit()">Edit</a> </td>

<td><a href="delete_Porosite.php?id=<?php echo $user['id'];?>" onclick="return deletefunction()">Delete</a> </td>

</tr>

<?php endforeach; ?>
</tbody>


</table>



</div>


           <script src="js/dashboard.js"></script>
           </body>