<style>
    #c{
        width:300px;
        height:300px;
    }
</style>
<?php

require 'include/db_connect.php';

if(isset($_GET['id']))

{
    $id = $_GET['id'];

}

$sql= 'SELECT * from smartphone WHERE id = :id';

$query = $pdo -> prepare($sql);
$query -> execute(['id' => $id]);

$user = $query -> fetch();

if(isset($_POST['submit']))

{
    
    $titulli = $_POST['titulli'];
    $teksti = $_POST['teksti'];
   // $image =$_POST['image'];

    $sql = 'UPDATE smartphone SET titulli = :titulli, teksti= :teksti  WHERE id= :id';
    $query=$pdo -> prepare($sql);
    $query -> bindParam('titulli',$titulli);
    $query -> bindParam('teksti',$teksti);
   // $query -> bindParam('image',$image);
    $query -> bindParam('id',$id);

    $query -> execute();
    header("Location: dashboardShtepia.php");
}

?>
<h1>Ndrysho Emertimin e Artikullit dhe Cmimin</h1>

<div class="contact">
        <div class="container flex">
            <form method="POST" enctype="multipart/form-data">
            <label for="emri">Emertimi i artikullit</label><br>
                <input type="text" name="titulli" placeholder="<?php echo $user['titulli']; ?> "><br><br>
                <label for="cmimi">Cmimi</label><br>
                <input type="text" name="teksti" placeholder="<?php echo $user['teksti']; ?>">
                <br>
                <br>
                
               <!-- <input type="file" name="image" placeholder="<?php echo $user['image']; ?>">-->
                <input type="submit" name="submit" value="Save">
            </form>
            
        </div>
    </div>

    