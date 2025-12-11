<?php require_once(__DIR__ . '/header.php'); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOKHAN PROD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<style> 
nav{background-image: url(logoC2.png) ;}
.submenu { background-image: url(logoC2.png) ;}

@media screen and (max-width: 768px){
.video-container2 {
 
    gap: 10px;    
    padding: 0 0 0;              
    margin-top: 0em;
    margin-bottom: 0em;
}
}
</style>


    <header>

        <div class="fondH1">

            <h1> <a href="home.html"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <?php require_once(__DIR__ . '/nav.php'); ?>

    <main>


    <div class = "mainFontTechno">
            <h2>Flight Controller</h2>
             </div>




        </div>


                <div class="video-container2">
                    <div class="video-element2">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iFLc4sr6Rrk?si=IrBzAHFTF4m55U1C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class= "video-container2-text"> FC Controller Video Presentation<br><br> Enjoy!!<br>
                </div>
                </div>
    
                <div class = mainFontDark>
                    <p><em> Ma flight controller utilise les meilleurs composants sur le marché pour les FC comme un STM32H7,  un gyroscope ICM42688 ( le gyro a son propre oscillateur!!!), un barometre DSP310, un slot SD Card, une alimentation 10V pour VTX numérique, ses alimentations 5V et 3,3V ont été optimisés pour avoir une bonne dissipation thermique même au sol...
                    </p></em>

            <div class="imgslider-container">
                <!-- Slider -->
                <div class="imgslider">
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/FC Board v1.0 vue 3d.png" alt="Image 1">
                        <div class="text">3D view Bottom</div>
                    </div>
                    <div class="imgslide">
                                                <img class="resize-image" src="../imgboard/vue3Dversofc.jpg" alt="Image 2">
                        <div class="text">3D view Top</div>
                        
                    </div>

                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/flight controller verso.jpg" alt="Image 2">
                        <div class="text">FC Board</div>

                        </div>

                    <div class="imgslide">
                      
                        <img class="resize-image" src="../imgboard/flight controller recto.jpg" alt="Image 3">
                        <div class="text">FC Board other side</div>
                    </div>
                    <div class="imgslide">
                        
                        <img class="resize-image" src="../imgboard/customfirmware.png" alt="Image 3">
                        <div class="text">custom firmware for my own target</div>
                    
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/fclayout.png" alt="Image 4">
                        <div class="text">Home made layout</div>
                    </div>
                </div>
                </div>
            
                <div class="controls">
                <!-- Navigation -->
                <button class="imgprev" onclick="moveSlide(-1)">&#10094;</button>
                
            
                <!-- Indicateurs -->
                <div class="imgindicators">
                    <span class="imgdot" onmouseover="currentSlide(1)"></span>
                    <span class="imgdot" onmouseover="currentSlide(2)"></span>
                    <span class="imgdot" onmouseover="currentSlide(3)"></span>
                    <span class="imgdot" onmouseover="currentSlide(4)"></span>
                    <span class="imgdot" onmouseover="currentSlide(5)"></span>
                    <span class="imgdot" onmouseover="currentSlide(6)"></span>
                </div>
            
                <button class="imgnext" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>    
    </main>

    <footer class="footer">
        
        <div class="footer-content">
        <a href="../home.html" rel="noopener noreferrer" >  <img src="../img/fond1.png" alt="logo" title="logo" ><div class="textFooter">Website Fun Version</div></a> 
    </div>

    <div class="footer-content">
        <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer" >  
        <img src="logoyt.png" alt="youtube logo" title="Youtube URL">  <div class="textFooter">My Youtube URL </div></a>
    </footer>

    <script src="script.js"></script>
    <script src="image.js"></script>


    
</body>
</html>