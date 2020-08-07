<?php

require 'include/db_connect.php';

?>

<?php

if(isset($_POST['submit']))
{
    $firstname= $_POST['firstname'];
    
    $lastname= $_POST['lastname'];
    
    $email= $_POST['email'];
    
    $password= password_hash( $_POST['password'], PASSWORD_BCRYPT);

    $sql= "INSERT INTO users (firstname, lastname, email, password, to_date) VALUES (:firstname, :lastname, :email, :password, now())";

    $query= $pdo -> prepare($sql);

    $query -> bindParam('firstname', $firstname);

    $query -> bindParam('lastname', $lastname);
    
    $query -> bindParam('email', $email);
    
    $query -> bindParam('password', $password);

    $query -> execute();
    header("Location: users.php");
    
}

?>

<form action="add_user.php" method="post">

First_Name
<br>
<input type="text" name="firstname">
<br>
Last_Name
<br>
<input type="text" name="lastname">
<br>
Email
<br>
<input type="text" name="email">
<br>
Password
<br>
<input type="password" name="password">
<br>
<br>
<input type="submit" name="submit" value="submit">

</form>














