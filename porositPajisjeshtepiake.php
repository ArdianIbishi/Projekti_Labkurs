<link rel="stylesheet" type="text/css" href="css/porositForma.css">
<?php

require 'include/db_connect.php';

if(isset($_GET['id']))

{
    $id = $_GET['id'];

}

$sql= 'SELECT * from shtepia WHERE id = :id';

$query = $pdo -> prepare($sql);
$query -> execute(['id' => $id]);

$user = $query -> fetch();

if(isset($_POST['submit']))

{
    $titulli = $_POST['titulli'];
    $teksti = $_POST['teksti'];
    $emri=$_POST['emri'];
    $email=$_POST['email'];
    $adresa=$_POST['adresa'];
    $telefoni=$_POST['telefoni'];
    $sasia= $_POST['sasia'];
    
if(empty($emri))
{
    echo "<h1>Error: Ploteso fushen e Emrit-it !!</h1>";
}
elseif (!preg_match("/^[a-zA-Z ]*$/",$emri)) {
    echo "<h1>Error: Username duhet te permbaj vetem shkronja !!</h1>";
  }
 
   


elseif(empty($email)){
    
    echo "<h1>Error: Ploteso fushen e Email-it !!</h1>";
}

elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "<h1>Error: Formati i shenimit te emai-it eshte jo valid !!</h1>";
}

elseif(empty($telefoni))
{
    echo "<h1>Error: Ploteso fushen e Telefon-it !!</h1>";
}
elseif (preg_match("/^[0-9 ]{10}+$/",$telefoni)) {
    echo "<h1>Error: Te fusha e telefonit sheno vetem numra !!</h1>";
  }

elseif(empty($sasia))
  {
      echo "<h1>Error: Ploteso fushen e Sasise !!</h1>";
  }
  elseif (preg_match("/^[0-9 ]{10}+$/",$sasia)) {
      echo "<h1>Error: Te fusha e sasise sheno vetem numra !!</h1>";
    }


else{
  echo"<script>alert('Porosia eshte kryer me sukses')</script>";

    $sql = 'INSERT INTO porosia(titulli, teksti,sasia, emri, email, adresa, telefoni,data_porosise) VALUES (:titulli, :teksti, :sasia, :emri, :email, :adresa, :telefoni, now())';
    $query=$pdo -> prepare($sql);
    $query -> bindParam('titulli', $titulli);
    $query -> bindParam('teksti', $teksti);
    $query -> bindParam('sasia', $sasia);
    $query -> bindParam('emri', $emri);
    $query -> bindParam('email', $email);
    $query -> bindParam('adresa', $adresa);
    $query -> bindParam('telefoni', $telefoni);

    $query -> execute();
    header("Location: kategoriaShtepia.php");
}
}
?>

<?php

include 'include/porositForma.php';

?>
<script src="js/porositForma.js"></script>
</div>