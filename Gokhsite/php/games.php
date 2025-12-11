<?php require_once(__DIR__ . '/header.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<style>

body{overflow-x: hidden;}
nav{
    background-image: url(logoC2.png) ;}
.submenu { background-image: url(logoC2.png) ;
}

.image-container
{
    background-image: url("../fon2.png");
    background-repeat: no-repeat;
    background-size: cover;
}

.image-content img {
border: 3px solid rgb(2, 28, 48);

}
</style>

    <header>

        <div class="fondH1">

            <h1> <a href="home.php"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <body>

    <?php require_once(__DIR__ . '/nav.php'); ?>





    <main>


        <div class="mainFontIm">
           <center> <h1>Online Games</h1></center>

           <p><em>Only on PC</em></p>

           
            <div class="image-container">

                <div class="image-content">
                    <a href="vsdragoon.php">  <img src="../imgboard/gamedragonimage.webp" class="resize-image2"> 
                    <p>Dragoon vs Dragoon</p> </a>
        
                </div>
        
                <div class="image-content">
                    <a href="dragoonmulti.php">  <img src="../img/dragon2.gif" class="resize-image2"> <p>Dragoons Multi</p> </a>
                  </div>
                  
                    <div class="image-content">
                <a href="eaglegame.php">  <img src="../img/imgliengame.png" class="resize-image2"> 
                  <p>Eagle game free world</p> </a> 
                </div>

            <div class="image-content">
                <a href="eaglegame.php">  <img src="../img/imgliengame.png" class="resize-image2"> 
                  <p>Eagle game free world</p> </a>
            </div>
    

    
    </div>          
         
          
        </div>
     
        <div class="mobileOff">


                <img id="Eagle2" src="../img/flying-eagle.gif" alt="Personnage"  class="imgEagle2">   

        <!--
        <img src="../img/flying-eagle.gif" alt="Image Traversante" class="imageDef" id="imageToMove">

         <img id="PersoDrone" src="../img/drone-flying.gif" alt="Personnage"  class="imgPersoDrone">
        <img id="drone" src="../img/drone-flying.gif" alt="imgdrone"  class="imgDrone">
            <img id="bouleFeu" src="../img/boulefeu.gif" alt="bouleimg"  class="imgBouleFeu">
    
           
            <img id="imgTest" src="../img/bouleFeu.gif" alt="Pierre"  class="cloneImage">
            <img id="dragonBot" src="../img/dragon2.gif" alt="dragon2"  class="imgDragon2"></div>
!-->

        </div>
       

</div>
</div>



    </main>


    <footer class="footer">
        
        <div class="footer-content">
        <a href="../home.php" rel="noopener noreferrer" >  <img src="../img/fond1.png" alt="logo" title="logo" ><div class="textFooter">Website Fun Version</div></a> 
    </div>

    <div class="footer-content">
        <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer" >  
        <img src="logoyt.png" alt="youtube logo" title="Youtube URL">  <div class="textFooter">My Youtube URL </div></a>
    </footer>

    <script src="script.js"></script>

    <script src="eaglegame.js"></script>

</body>
</html>