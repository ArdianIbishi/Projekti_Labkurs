

<?php include('include/db_connect.php') ?>
<?php
    if (isset($_POST['submit'])) {
        $titulli = $_POST['titulli'];
        $teksti = $_POST['teksti'];

        $targetDir = "uploads/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            $query = $pdo->prepare('INSERT INTO minislidethome (titulli, teksti, image) VALUES (:titulli, :teksti, :image)');
            $query->bindParam(':titulli', $titulli);
            $query->bindParam(':teksti', $teksti);
            $query->bindParam(':image', $fileName);

            $query->execute();

          return header('Location: dashboardMiniSlidetHome.php');
        }

        return die('PROBLEM');
    }
?>
<link rel="stylesheet" type="text/css" href="css/porositForma.css">
<h1 style="text-align:center;">MiniSlidet ne Home page</h1>
<h2 style="text-align:center;">Forma per regjistrimin e artikujve</h2>
<div id="forma" >
<form method="post" enctype="multipart/form-data">
<h2 style="color:white;text-align:center padding:50px;margin-left:50px">Regjistro artikuj te rinje te MiniSlidet Homepage</h2>



<label for="emri">Emrertimi i artikullit:</label><br>
<input type="text" class="type" name="titulli" placeholder="Sheno emrin e artikullit"><br>



<label for="cmimi">Cmimi i artikullit:</label><br>
<input type="text" class="type" name="teksti" placeholder="Sheno cmimin e artikullit"><br>


<label for="image">Vendos foton e artikullit</label><br><br>

<input type="file"  name="image" style="margin-left:50px;"><br><br>

<input type="submit" name="submit" value="Save" style="margin-left:50px;">
<br>
<br>
</form>
        </div>
    </div>
</body>
</html>





<!--
    <div class="contact">
        <div class="container flex">
            <form method="POST" enctype="multipart/form-data">
            <label for="emertimi">Emertimi i Artikullit</label><br>    
            <input type="text" name="titulli" placeholder="Emertimi i artikullit"><br><br>
            <label for="emertimi">Cmimi i Artikullit</label><br>
                <input type="text" name="teksti" placeholder="Cmimi i Artikullit"><br><br>
                <label for="foto">Fotoja e artikullit</label>
                <input type="file" name="image"><br><br>
                <input type="submit" name="submit" value="Save">
            </form>
            0000000000000000000000000000
    -->        
