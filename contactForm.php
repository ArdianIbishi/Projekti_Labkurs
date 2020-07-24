<!DOCTYPE html>
<html>
<head>

<title>Na kontaktoni</title>
<link rel="stylesheet" type="text/css" href="css/contact.css">
<script src="contact.js"></script>



</head>


    <body>
        
        <div id="container">
            
            <div class="header">
                <?php
                
                include 'include/header.php';
                
                ?>
           </div>
           <br>
           <h2>Na kontaktoni</h2>
           <div class="content">
               
               <div class="map">
                   
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.335552299005!2d21.3199946152696!3d42.31404127918999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13546372e9fde1f7%3A0xe350e883d2bee99f!2sBeni%20Impex!5e0!3m2!1sen!2s!4v1595593208578!5m2!1sen!2s" width="600" height="571" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
            <div class="contact">
                    <form action="contact.php"  onsubmit="return validimiContact()" method="post" name="form">

                        <label for="fname">Emri</label>
                        <input type="text" id="firstname" name="firstname" placeholder="sheno emrin...">

                        <div id="firstnameError">Ju lutem plostone fushen e firstname-it</div>


                        <label for="lname">Mbiemri</label>
                        <input type="text" id="lastname" name="lastname" placeholder="sheno mbiemrin...">

                        <div id="lastnameError">Ju lutem plotsone fushen e lastname-it</div>


                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="sheno email-in...">

                        <div id="emailError">Ju lutem plostone fushen e username-it</div>



                      <label for="qyteti">Qyteti</label>
                         <select id="qyteti" name="qyteti">
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

                        <label for="subjecti">Subject</label>
                        <textarea id="subject" name="subject" placeholder="sheno diqka tjeter..." style="height:100px"></textarea>
                    

                        <input type="submit" name="submit" value="Dergo">

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

