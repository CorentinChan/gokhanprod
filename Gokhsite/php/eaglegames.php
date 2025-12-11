<?php require_once(__DIR__ . '/header.php'); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOKHAN PROD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">
</head>
<style>body{overflow: hidden;}</style>
<body>
    <header>

        <div class="fondH1">

            <h1> <a href="home.html"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                    <img src="../img/logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <?php require_once(__DIR__ . '/nav.php'); ?>


    <main>


        <div class="mainFontDark">
                    
            <div class="video-container-slide-game">
            
                            <div class="video-slide">
              <iframe width="320" height="240" src="https://www.youtube.com/embed/sedY-kQQtPA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">

                   <iframe width="1022" height="575" src="https://www.youtube.com/embed/nuW6EpxjPCs" title="test tpu osmo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            
            </div>
            <div class="video-slide">                <iframe width="1022" height="575" src="https://www.youtube.com/embed/qysAAWqE4nw" title="cap frehellut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>           
          </div>
          <div class="video-slide">
                        <iframe width="1022" height="575" src="https://www.youtube.com/embed/C6l50iyIjtw" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      </div>
                        
          </div>
        
          <div class="controls-game">

           

            <button class="prev">←</button>
            <div class="dots">
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            <button class="next">→</button>
            <div class="txtGame">  <p><em><FONT color = "#00000;" > <font size="1em"> Faites bougez l'aigle avec la avec z,q,s,d<br>Vous pouvez revenir
                avec clic gauche <br> Bougez le drone avec t,f,g,h <br>normal/sport mode avec r/y Enjoy!!<br></em></p>
                </font></div>
          </div>
          
        </div>
     
        <div class="imGame"><img id="eagle3"  src="../img/eagle-face.gif" alt="eagle3"  class="imgEagle3">
            <img id="Perso"  src="../img/flying-eagle.gif" alt="Personnage"  class="imgPerso">
            <img id="PersoDrone"  src="../img/drone-flying.gif" alt="Personnage"  class="imgPersoDrone">
            <img id="Pierre"  src="../img/pierre.gif" alt="Pierre"  class="imgPierre">
            <img id="Pierre2"  src="../img/pierre.gif" alt="Pierre"  class="imgPierre2">
            <img id="Pierre3"  src="../img/pierre.gif" alt="Pierre"  class="imgPierre3">
            <img id="Pierre4"  src="../img/pierre.gif" alt="Pierre"  class="imgPierre4"></div>

        <div class="mainFontIm">
            <h2><center>The eagle game</center></h2>
            <p><em><FONT color = "#00000;" > <font size="1em"> Faites bougez l'aigle avec la avec z,q,s,d<br>Vous pouvez revenir
            avec clic gauche <br> Bougez le drone avec t,f,g,h <br>normal/sport mode avec r/y Enjoy!!<br></em></p>
            </font>
        </div>

</div>
</div>



    </main>

    <footer class="footer">
        
        <left><em><FONT color = "#ffffff;" > <font size="3em"> Faites bougez l'aigle avec la avec z,q,s,d |||| Vous pouvez revenir
            avec clic gauche <br> Bougez le drone avec t,f,g,h |||| normal/sport mode avec r/y Enjoy!!</em><br></left>
            </font>

    </footer>

    <script src="script.js"></script>
    <script src="../eaglegame.js"></script>

</body>
</html>