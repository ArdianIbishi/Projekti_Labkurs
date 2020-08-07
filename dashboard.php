<?php 

session_start();

if(isset($_SESSION['roli']) == "1"){

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

      <style>
        #cantainer-dashboardMenu{
            height:2000px;
        }
      </style>      
    </head>

    <body>
        <div id="container">
            
           <?php
           
           include 'include/header.php';

           ?>
           <?php
            include 'include/dashboardLineHr.php';

           ?>
<div id="cantainer-dashboardMenu">
<?php
           
           include 'include/dashboard.php';
      
           ?>
</div>

<?php }
else{
  header('Location: index.php');
}
?>