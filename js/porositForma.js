

var emri=document.forms['form1']['emri'];

var email=document.forms['form1']['email'];

var adresa=document.forms['form1']['adresa'];

var telefon=document.forms['form1']['telefoni'];

var sasia=document.forms['form1']['sasia'];

var emriError=document.getElementById("emriError1");


var emailError=document.getElementById("emailError1");

var adresaError=document.getElementById("adresaError1");

var telefonError=document.getElementById("telefonError1");

var sasiaError=document.getElementById("sasiaError1");


function validimiContact(){

    if(emri.value==""){
        emri.style.border ="1px solid red";
        emriError1.style.display="block";
        emri.focus();
        return false;
    }
    

    if(email.value==""){
        email.style.border ="1px solid red";
        emailError1.style.display="block";
        email.focus();
        return false;
    }

    
    if(adresa.value==""){
        adresa.style.border ="1px solid red";
        adresaError1.style.display="block";
        adresa.focus();
        return false;
    }
    
    if(telefoni.value==""){
        telefoni.style.border ="1px solid red";
        telefonError1.style.display="block";
        telefoni.focus();
        return false;
    }

    
    if(sasia.value==""){
        sasia.style.border ="1px solid red";
        sasiaError1.style.display="block";
        sasia.focus();
        return false;
    }

}
