  
<?php

require 'include/db_connect.php';

if(isset($_POST['submit'])){

    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $country= $_POST['country'];
    $subjecti= $_POST['subjecti'];
    
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

    $sql="INSERT INTO contact1 (firstname, lastname, email, country, subjecti) VALUES(:firstname, :lastname, :email, :country, :subjecti)";
    $query= $conn->prepare($sql);

    $query -> bindParam('firstname', $fname);
    
    $query -> bindParam('lastname', $lname);
    $query -> bindParam('email', $email);
    $query -> bindParam('country', $country);
    $query -> bindParam('subjecti', $subjecti);

    $query -> execute();

    header("Location: index.php");


}

}
?>




