<?php

session_start();
if(isset($_SESSION['user_id'])){

    header("Location: index.php");
}

?>
<?php
require 'include/db_connect.php';
?>
<?php
if(isset($_POST['submit'])):

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query= $pdo -> prepare("SELECT id, firstname, email, password, roli FROM klientet WHERE email= :email");

    $query -> bindParam('email', $email);
    $query -> execute();

    $user = $query ->fetch();

    if(count($user) > 0 && password_verify($password,$user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];

        $_SESSION['roli'] = $user['roli'];
        header("Location: index.php");
    }

    else{
        echo "Fjalkalimi ose email eshte gabim";
    }

endif;
?>

<!DOCTYPE html>
<html>
<head>

<title>LogIn</title>
<link rel="stylesheet" type="text/css" href="css/signUp1.css">

<link rel="stylesheet" type="text/css" href="css/signUp.css">
<link rel="stylesheet" type="text/css" href="css/projektia.css">

<script src="contact.js"></script>



</head>


    <body>
        
        <div id="container">
            
            
           </div>
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
                 </div>
           <br>
           
           <div class="contenti">
               
               
            <div class="contact">
            
<?php
if(!empty($message)){

    echo $message;
}
?>

            <h2>Hyr si klient te Beni Impex</h2><br>

                    <form action="logIn.php"  onsubmit="return validimiContact()" method="post" name="form">

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="sheno email-in...">

                        <div id="emailError">Ju lutem plostone fushen e username-it</div>

                        <label for="lname">Password</label>
                        <input type="password" id="password" name="password" placeholder="sheno password-in...">
                        <div id="passwordlError">Ju lutem plostone fushen e password-it-it</div><br><br>

<br><br>

                        <input type="submit" name="submit" value="LogIn">

                    </form>
           </div>
                
            </div>

            <div class="footer">
            
            <?php   
            include 'include/footer.php'; 
            ?>
            
            </div>
        </div>
       <script>
var firstname=document.forms['form']['firstname'];

var lastname=document.forms['form']['lastname'];

var email=document.forms['form']['email'];

var usernameError=document.getElementById("firstnameError");


var passwordError=document.getElementById("lastnameError");

var passwordError=document.getElementById("emailError");

function validimiContact(){

    if(firstname.value==""){
        firstname.style.border ="1px solid red";
        firstnameError.style.display="block";
        firstname.focus();
        return false;
    }
    
    if(lastname.value==""){
        lastname.style.border ="1px solid red";
        lastnameError.style.display="block";
        lastname.focus();
        return false;
    }

    if(email.value==""){
        email.style.border ="1px solid red";
        emailError.style.display="block";
        email.focus();
        return false;
    }
    

}
</script>    
    </body>
</html>










