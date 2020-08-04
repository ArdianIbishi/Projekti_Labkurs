<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Projekti</title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" href="css/projektia.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            
    </head>

    <body>
        <div id="container">
           <?php
           
           include 'include/header.php';

           ?>
            
            <div class="header2">
            
            <?php
            
            include 'include/header2.php';
            ?>


            </div>
            <div class="middlecontainer">

                 <div id="kategorite"><h3 class="h3">KATEGORITE<i class="fa fa-chevron-down"></i><h3>
                    
                 <?php
                 include 'include/kategoria.php';
                 ?>
            </div>
                <div class="slidet">
                    <div>
                    <figure>
                        <a href="#"><img src="img/kozmetika.jpg"></a>
                        <a href="#"><img src="img/fashion.jpg"></a>
                        <a href="#"><img src="img/marketi.jpg"></a>
                        <a href="#"><img src="img/vera.gif"></a>
                        <a href="#"><img src="img/aaallogo beni impex (1).png"></a>
                    </figure>
                    </div>
                    

                </div>
            </div>
            <?php
            require 'include/db_connect.php';
            
            $sql='SELECT* from minislidethome';
            $query=$pdo ->query($sql);

            $users=$query -> fetchAll();
            
            ?>

            

            <br>
            
           
            <p>Produkte qe po blihen se fundi te Beni Impex</p>
            <div class="artikujt">
            <?php foreach($users as $usera): ?>
                <div class="artikulli">
                    <a href="miniSlidetHome.php"><img src="uploads/<?php echo $usera['image'];?>" /></a>
                    <div><?php echo $usera['titulli'];?></div>
                    <div><?php echo $usera['teksti'];?>€uro</div>
                </div>
                <?php endforeach; ?>
            
                <div class="artikulli">
                    <a href="#"><img src="img/iphone.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/shtrydhse frutash.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div> 
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/televizor.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/krahen.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/krem.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/miniblinder.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/tplink.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/tenxhere.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/kamera.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>
                
                <div class="artikulli">
                    <a href="#"><img src="img/beba.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/usb.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>
                                        
                <div class="artikulli">
                    <a href="#"><img src="img/kondicioner.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>
                
                <div class="artikulli">
                    <a href="#"><img src="img/laptop.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>
                                               
                <div class="artikulli">
                    <a href="#"><img src="img/tenxhere.jpg"></a>
                    <div>cmimi</div>
                    <div>cmimi</div>
                </div>
            </div>


            <div class="footer">
            <?php   
            include 'include/footer.php'; 
            ?>
            </div>
        </div>
    </body>
</html>
