<?php

require'include/db_connect.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];
}


$query= 'DELETE  from porosia WHERE id= :id';

$query = $pdo ->prepare($query);

$query -> execute(['id' => $id ]);

header("Location: dashboardPorosite.php");



?>