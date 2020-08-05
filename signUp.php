<style>
    

  
</style>
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
if(isset($_POST['submit'])){

    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $date= $_POST['date'];
    $email = $_POST['email'];
    $city= $_POST['city'];
    
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql="INSERT INTO klientet(firstname, lastname, Datelindja, email, city, password,data_regjistrimit) VALUES (:firstname, :lastname, :date, :email, :city, :password, now())";

    $query= $pdo -> prepare($sql);

    //$users=$query;

    $query -> bindParam('firstname', $firstname);
    
    $query -> bindParam('lastname', $lastname);
    
    $query -> bindParam('date', $date);

    $query -> bindParam('email', $email);
    
    $query -> bindParam('city', $city);
    
    $query -> bindParam('password', $password);
  

    if($query -> execute()){

        $message="Jeni regjistruar me sukses";
    }
    else{

        $message="Ka nje problem gjate regjistrimit";
    }

}
?>

<div>
<!DOCTYPE html>
<html>
<head>

<title>Regjistrohu</title>
<link rel="stylesheet" type="text/css" href="css/signUp1.css">

<link rel="stylesheet" type="text/css" href="css/signUp.css">
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

            <h2>Regjistrohu si klient te Beni Impex</h2><br>

                    <form action="signUp.php"  onsubmit="return validimiContact()" method="post" name="form">

                        <label for="fname">Emri</label>
                        <input type="text" id="firstname" name="firstname" placeholder="sheno emrin...">

                        <div id="firstnameError">Ju lutem plostone fushen e firstname-it</div>


                        <label for="lname">Mbiemri</label>
                        <input type="text" id="lastname" name="lastname" placeholder="sheno mbiemrin...">

                        <div id="lastnameError">Ju lutem plotsone fushen e lastname-it</div>

                        <label for="lname">Datelindja</label>
                        <input type="date" id="date" name="date" ><br><br>

                       <!-- <div id="dateError">Ju lutem plotsone fushen e date-s</div>-->




                      <label for="qyteti">Qyteti</label>
                         <select id="city" name="city">
                         <option value="prishtine">Prishtine</option>
                         <option value="prizren">Prizren</option>
                        <option value="peje">Peje</option>
                        <option value="gjakove">Gjakove</option>
                        <option value="ferizaj">Ferizaj</option>
                        <option value="gjilan">Gjilan</option>
                        <option value="viti">Viti</option>
                        <option value="mitrovice">Mitrovice</option>
                        <option value="suhareke">Suhareke</option>
                        <option value="kline">Kline</option>
                        </select>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="sheno email-in...">

                        <div id="emailError">Ju lutem plostone fushen e username-it</div>

                        <label for="lname">Password</label>
                        <input type="password" id="password" name="password" placeholder="sheno password-in...">
                        <div id="passwordlError">Ju lutem plostone fushen e password-it-it</div><br><br>

                        <label for="lname">Confirm Password</label>
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password...">
                        <div id="cpasswordlError">Ju lutem plostone fushen e Confirm Password-it-it</div><br><br>
<br><br>

                        <input type="submit" name="submit" value="Regjistrohu">

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










