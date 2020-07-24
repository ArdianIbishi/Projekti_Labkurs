<?php include('include/db_connect.php') ?>
<?php
    if (isset($_POST['submit'])) {
        $emri = $_POST['emri'];
        $pershkrimi = $_POST['pershkrimi'];
        
        $cmimi = $_POST['cmimi'];
        $kategoriaId = $_POST['kategoriaId'];

        $targetDir = "upload/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
            $query = $pdo->prepare('INSERT INTO artikulli (emri, pershkrimi,cmimi,kategoriaId, image) VALUES (:emri, :pershkrimi,:cmimi,:kategoriaId, :image)');
            $query->bindParam(':emri', $emri);
            $query->bindParam(':pershkrimi', $pershkrimi);
            $query->bindParam(':cmimi', $cmimi);
            $query->bindParam(':kategoriaId', $kategoriaId);
            $query->bindParam(':image', $fileName);

            $query->execute();

            return header('Location: index.php');
        }

        return die('PROBLEM');
    }
?>
    <div class="contact">
        <div class="container flex">
            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="emri" placeholder="Emri">
                <input type="text" name="pershkrimi" placeholder="pershkrimi">
                <input type="number" name="cmimi" placeholder="cmimi">
                <input type="number" name="kategoriaId" placeholder="KategoriaId">
                <input type="file" name="image">
                <input type="submit" name="submit">
            </form>
            
        </div>
    </div>
</body>
</html>
