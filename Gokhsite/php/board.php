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
        
            </style>
    <header>

        <div class="fondH1">

            <h1> <a href="home.php"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
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
            <h2>Home made PCB</h2>
             </div>

        <div class = "mainFontDark">
            <p><em> Passioné de drones et étant ingénieur hardware, j'ai eu l'envie de developpé mes propres cartes pour mes drones FPV

                <br><br>J'ai réalisé une carte Flight Controller , une carte ESC, et une carte PowerBoard<br></em></p>
                <div class="image-container2">

         
                <a href="fc.php" class="full-link">  <center><img class="resize-image2"  src="../imgboard/fcboard3cverso.jpg"> 
                    <p>Flight Controller</p> </center> </a>

                 
             <a href="esc.php" class="full-link">  <center><img class="resize-image2"  src="../imgboard/esc.jpg"> 
                    <p>ESC</p> </center> </a>

                    <a href="pb.php" class="full-link">  <center><img class="resize-image2"  src="../imgboard/Power Board.jpg"> 
                    <p>Power Board</p> </center> </a>

        
                </div>


            <div class="imgslider-container">
                <!-- Slider -->
                <div class="imgslider">
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/allboard.jpg" alt="Image 1">
                        <div class="text">all boards : FC, ESC, Power board</div>
                    </div>
                    <div class="imgslide">
                        <a href="fc.php" >
                        <img class="resize-image" src="../imgboard/flight controller verso.jpg" alt="Image 2">
                        <div class="text">FC Board</div>
                        </a>
                    </div>
                    <div class="imgslide">
                        <a href="PB.php" >
                        <img class="resize-image" src="../imgboard/Power Board.jpg" alt="Image 3">
                        <div class="text">Power Board</div>
                    </a> </div>
                    <div class="imgslide">
                        <a href="ESC.php" >
                        <img class="resize-image" src="../imgboard/esc.jpg" alt="Image esc">
                        <div class="text">ESC single</div>
                    </a>
                    </div>
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/allboardrunning.png" alt="Image 4">
                        <div class="text">All Board running </div>
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
                </div>
            
                <button class="imgnext" onclick="moveSlide(1)">&#10095;</button>
        </div>
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
        <img src="../img/logoyt.png" alt="youtube logo" title="Youtube URL">  <div class="textFooter">My Youtube URL </div></a>
    </footer>
    <img id="drone" src="../img/drone-flying.gif" alt="imgdrone"  class="imgDrone">

    <script src="script.js"></script>
    <script src="image.js"></script>
</body>
</html>