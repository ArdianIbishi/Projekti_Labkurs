  
<?php

require 'include/db_connect.php';

if(isset($_POST['submit'])){

    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $city= $_POST['city'];
    $subject= $_POST['subject'];
    
if(empty($firstname))
{
    echo "<h1>Error: Ploteso fushen e Username-it !!</h1>";
}
elseif (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
    echo "<h1>Error: Username duhet te permbaj vetem shkronja !!</h1>";
  }
  elseif(empty($lastname))
  {
      echo "<h1>Error: Ploteso fushen e Username-it !!</h1>";
  }
  elseif (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      echo "<h1>Error: Username duhet te permbaj vetem shkronja !!</h1>";
    }
   


elseif(empty($email)){
    
    echo "<h1>Error: Ploteso fushen e Email-it !!</h1>";
}

elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "<h1>Error: Formati i shenimit te emai-it eshte jo valid !!</h1>";
}

else{

    $sql="INSERT INTO contact (firstname, lastname, email, city, subject) VALUES (:firstname, :lastname, :email, :city, :subject)";
    $query= $pdo->prepare($sql);

    $query -> bindParam('firstname', $firstname);
    
    $query -> bindParam('lastname', $lastname);
    $query -> bindParam('email', $email);
    $query -> bindParam('city', $city);
    $query -> bindParam('subject', $subject);

    $query -> execute();

    header("Location: index.php");


}

}
?>




