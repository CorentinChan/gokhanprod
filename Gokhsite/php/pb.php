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


    <div class = "mainFontTechno">
            <h2>Power Board</h2>
             </div>

         

          

            <div class = mainFontDark>

                    <p><em> Ma Power Board permet de connecter la batterie et les signaux de la Flight Controller aux ESCs <br> Elle peut aussi intégrer un capteur de courant, et une alimentation 10V.
                    </p></em>

            <div class="imgslider-container">
                <!-- Slider -->
                <div class="imgslider">
                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/pbvue3d.jpg" alt="Image 1">
                        <div class="text">3D view Top</div>
                    </div>
                    <div class="imgslide">
                      <img class="resize-image" src="../imgboard/pbvue3bottom.jpg" alt="Image 2">
                        <div class="text">3D view Bottom</div>
                        
                    </div>

                    <div class="imgslide">
                        <img class="resize-image" src="../imgboard/Power Board.jpg" alt="Image 4">
                        <div class="text">Home made layout</div>
                    </div>
                </div>
                </div>
            
                <div class="imgslider-menu">
                <!-- Navigation -->
                <button class="imgprev" onclick="moveSlide(-1)">&#10094;</button>
                
            
                <!-- Indicateurs -->
                <div class="imgindicators">
                    <span class="imgdot" onmouseover="onmouseover(1)"></span>
                    <span class="imgdot" onmouseover="onmouseover(2)"></span>
                    <span class="imgdot" onmouseover="onmouseover(3)"></span>
                    <span class="imgdot" onmouseover="onmouseover(4)"></span>
                    <span class="imgdot" onmouseover="onmouseover(5)"></span>
                    <span class="imgdot" onmouseover="onmouseover(6)"></span>
                </div>
            
                <button class="imgnext" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>    

    <div class="video-container2">
      <div class="video-element2">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/ICL5XvS1bUc" title="Project 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  </div>
  <div class= "video-container2-text"> Components assemblied by reflow with hotplate <br><br>
  </div>
  </div>

    </main>

    <footer class="footer">
        
        <div class="footer-content">
        <a href="../home.html" rel="noopener noreferrer" >  <img src="../fond1.png" alt="logo" title="logo" ><div class="textFooter">Website Fun Version</div></a> 
    </div>

    <div class="footer-content">
        <a href="https://www.youtube.com/@Corentin-k8j" target="_blank" rel="noopener noreferrer" >  
        <img src="logoyt.png" alt="youtube logo" title="Youtube URL">  <div class="textFooter">My Youtube URL </div></a>
    </footer>

    <script src="script.js"></script>
    <script src="image.js"></script>


    
</body>
</html>