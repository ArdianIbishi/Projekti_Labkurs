<?php

try{
    $pdo=new PDO("mysql:host=localhost;db_name=db_projekti_labkurs","root","");
    echo "db is connected";
}

catch(PDOException $pdo)
{
    die("db is not connected");
}

?>