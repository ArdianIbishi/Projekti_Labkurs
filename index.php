<!-- Lloji i dokumentit -->
<!DOCTYPE html>
<html>


<!--Kreu (Koka) e dokumentit -->
    <head>
	<!-- Shfaqet emri Projektit ne tab te shfletuesit -->
        <title>Projekti</title>
		<!-- Nenkupton lloj formatim te shkronjave (familje)  shembull Shqip , Chirilice, Chinese, Arabian etj-->
        <meta charset="UTF-8">
		
		<!-- Ketu referohet  (kerkohet) dizajni fajlli i css per ueb faqe 
		css/projekti2 css dmth follderi ku gjendet, projekti2 dmth emri i fajllit me ekstensionin css
		
		stylesheet nenkupton llojin e dokumentit dmth dizajni pamja e ueb faqes si psh karakteristikat e elementeve 
		te ueb faqes qe jane te krijuara me html
		manipulimi me madhesine e shkronjave font-size: (jepet vlera) ;
		manipulimi me famijen e shkronjave font-family: njejt si larte
		prapavija e pamjes prapavijes se body elemtetit (html kodi) te faqes:
		body 
		{
			background-color:red;
			
		}
		Le te gjejme paragrafin me ID test dhe te ia ndrrojme ngjyren e shkronjave
		p
		{
			font-color: red;
		}
		-->
	
        <link rel="Stylesheet" href="css/projekti2.css">
		
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
           // ketu thirret pjesa e divit  te logos se marketit dhe te kerkuesit ( Kerko produktin) si dhe Supermarket..
		   //
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
            <br>
            <p class="paragrafikryesor" >Produkte qe po blihen se fundi te Beni Impex</p>
            <div class="artikujt">	

                <div class="artikulli">
                    <a href="#"><img src="img/aaallogo beni impex (1).png"></a>
                    <div>Artikulli 1</div>
                    <div>cmimi: 2.2 Eur</div>
                </div>

                <div class="artikulli">
                    <a href="#"><img src="img/iphone.jpg"></a>
                    <div>Iphone 4s</div>
                    <div>cmimi: 5 Euro</div>
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
