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
    body{ background-color:black;}
nav{background-image: url(logoC2.png) ;}
.submenu { background-image: url(logoC2.png) ;}
.imgSide img{
    max-width: 340px;
    object-fit: cover;
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
            <h2>ESC</h2>
             </div>

         


        </div>
        <div class = "mainFontBlue">
            <p><em>La carte est conçu pour une alimentation 6s et un courant maximum de 50A. Une des spécificités est la présence du condensateur 
                electrochimique de 330uF directement sur la carte. Une seconde version est en cours avec un autre MCU et ajout de busbar </em></p>
                

            
            <div class="video-container2">
                <div class= "video-container2-text"> Test de l'ESC avec la flight controller et la power board<br><br> Enjoy!!<br>
                </div>
                <div class="video-element2">
                    <iframe width="400" height="300" src="https://www.youtube.com/embed/YVB-qrwtbeg" title="video test esc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            </div>
           
            </div>

            <div class="imgslider-container">
                <!-- Slider -->
                <div class="imgslider">
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/visu esc1top.jpg" alt="Image 1">
                        <div class="text">3D view Top</div>
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/visu esc1.jpg" alt="Image 2">
                        <div class="text">3D view Bottom</div>
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/ESC single.jpg" alt="Image 4">
                        <div class="text">ESC photo</div>
                    </div>
    
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/new design esc bot.jpg" alt="Image 3">
                        <div class="text">New Design ESC 3D view Bottom</div>
                  </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/new design esc top.jpg" alt="Image 3">
                        <div class="text">New Design ESC 3D view Top</div>
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