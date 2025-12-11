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


            <div class="imgText-container">

                <div class="imgSide">
                    <img  src="../imgboard/3dviewcamdev.jpg"="Image 1">
                </div>

                <div class="txtSide">

            <h2><center>3D Prints</center></h2>


                <br></em></p>
                </div>

         

            </div>

            <div class = mainFontDark>

                    <p><em> I make some 3D prints for my drone, like frame shield and cam tpu <br>
                    </p></em>

            <div class="imgslider-container">
                <!-- Slider -->
                <div class="imgslider">
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/tpucoqueaxi.jpg" alt="Image 1">
                        <div class="text">Frame shield tpu</div>
                    </div>
                    <div class="imgslide">
                      <img class="resize-image" src="../imgboard/tpucam.jpg" alt="Image 2">
                        <div class="text">Cam TPU</div>
                        
                    </div>

                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/tpuchassisaxi.jpg" alt="Image 4">
                        <div class="text">3D view TPU</div>
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/3dviewcamdev.jpg" alt="Image 4">
                        <div class="text">3D view TPU CAM</div>
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/3dvieuxcamar.jpg" alt="Image 4">
                        <div class="text">3D view TPU CAM</div>
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/3dviewescshield.jpg" alt="Image 4">
                        <div class="text">3D view TPU ESC Shield</div>
                    </div>
                </div>
                </div>
            
                <div class="imgslider-menu">
                <!-- Navigation -->
                <button class="imgprev" onclick="moveSlide(-1)">&#10094;</button>
                
            
                <!-- Indicateurs -->
                <div class="imgindicators">
                    <span class="imgdot" onmouseover="currentSlide(1)"></span>
                    <span class="imgdot" onmouseover="currentSlide(2)"></span>
                    <span class="imgdot" onmouseover="currentSlide(3)"></span>
                    <span class="imgdot" onmouseover="currentSlide(4)"></span>
                    <span class="imgdot" onmouseover="currentSlide(5)"></span>
                </div>
            
                <button class="imgnext" onclick="moveSlide(1)">&#10095;</button>
        </div>

    </main>

    <footer class="footer">
        
        <div class="footer-content">
        <a href="../home.html" rel="noopener noreferrer" >  <img src="../fond1.png" alt="logo" title="logo" ><div class="textFooter">Website Fun Version</div></a> 
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