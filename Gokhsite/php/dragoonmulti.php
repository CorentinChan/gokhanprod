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
<style>
body{overflow: hidden;}
nav{
    background-image: url(logoC2.png) ;}
.submenu { background-image: url(logoC2.png) ;}
</style>

<body>
    <header>

        <div class="fondH1">

            <h1> <a href="home.html"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@Corentin-k8j" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <nav id="navbar">
        <a href="home.html">  <img class="menuimg" src="../img/logocomplique2.jpg" alt="logo" title="logo" > 
            <a href="home.html"><span class="textmenugokhan"> Gokhan Productions </span></a>
            

       <ul class="menu">
          
           <li>
               <a href="videos.html"><span class="textmenu">Videos</span></a>
                   <ul class="submenu" id="submenu1">
                  
                   <li><a href="videos.html">General</a></li>
                   <li><a href="forest.html">Forest</a></li>
                   <li><a href="sea.html">Sea</a></li>
                   <li><a href="mountains.html">Mountains</a></li>
                   <li><a href="purefpv.html">Pure FPV</a></li>
               </ul>
           </li>
           <li>
               <a href="board.html"><span class="textmenu">Board Design</span></a>
               <ul class="submenu" id="submenu2">
                   <li><a href="board.html">General</a></li>
                   <li><a href="fc.html">FC</a></li>
                   <li><a href="esc.html">ESC</a></li>
                   <li><a href="pb.html">Power board</a></li>
               </ul>
           </li>
           <li>
               <a href="others.html"><span class="textmenu">Others</span></a>
               <ul class="submenu" id="submenu3">
                   <li><a href="othersdrones.html">Others drones</a></li>
                   <li><a href="3dprints.html">3D prints</a></li>
                   <li><a href="sounds.html">Own Sounds</a></li>
                   <li><a href="games.html">Online Games</a></li>
               </ul>
           </li>
           <li><a href="contacts.html"><span class="textmenu">Contact</span></a></li>
      
           <li>
              
           </li>

   </ul>
   
   <button class="menugen-button" onclick="toggleMenu('submenu0')"><img  src="../img/menucon.png"></button>
   <ul class="submenu0" id="submenu0">
       <li><a href="videos.html"><span class=submenutitle>VIDEOS</span></a></li>
       <li><a href="forest.html">Forest</a></li>
       <li><a href="sea.html">Sea</a></li>
       <li><a href="mountains.html">Mountains</a></li>
       <li><a href="purefpv.html">Pure FPV</a></li>
       <li><a href="board.html"><span class=submenutitle>Boards</a></li>
       <li><a href="fc.html">FC</a></li>
       <li><a href="esc.html">ESC</a></li>
       <li><a href="pb.html">Power board</a></li>
       <li><a href="others.html"><span class=submenutitle>Others</span></a></li>
       <li><a href="othersdrones.html">Others drones</a></li>
       <li><a href="3dprints.html">3D prints</a></li>
       <li><a href="sounds.html">Own Sounds</a></li>
       <li><a href="games.html">Online Games</a></li>
       <li><a href="contacts.html"><span class="submenutitle">Contact</span></a></li>


   </ul>
   </nav>

    <ul class="menuMobile">
        <li>
            <a href="videos.html"><span class="textmenu">Videos</span></a>
        </li>
        <li>
            <a href="board.html"><span class="textmenu">Board Design</span></a>
        </li>
        <li>
            <a href="others.html"><span class="textmenu">Others</span></a>
        </li>
        <li><a href="contacts.html"><span class="textmenu">Contact</span></a></li>
    
        <li>
           
        </li>
    
    </ul>

</div>





    <main>

               


        <div class="mainFontDark">
                    
            <div class="zoneScore"></div>
    
            <div class="selectionAide">
                <form>
                        <input type="radio" id="choixAigle" name="choixAide" value="1" checked>
                        <label for="choixAigle">Aigle
                        </label>
                    <br>
                        <input type="radio" id="choixDrone" name="choixAide" value="2">
                        <label for="choixDrone">Drone                        </label>
                </form>
            </div>
            <div class="video-container-slide-game">
            
                            <div class="video-slide">
            </div>
            <div class="video-slide">
                <div class="video-slide-game"></div>
            </div>
            <div class="video-slide">                <iframe width="320" height="240" src="https://www.youtube.com/embed/sedY-kQQtPA" title="cap frehellut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>           
          </div>
          <div class="video-slide">
                        <iframe width="320" height="240" src="https://www.youtube.com/embed/C6l50iyIjtw" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      </div>
                        
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
            <div class="txtGame">  <p>MOVE J1 with z,q,s,d and shot with f<br> MOVE J2 with 8,4,5,6 or i,j,k,l and shot with + or m<br>
            </p> 
                </div>
          </div>
          
        </div>
     
        <div class="imGame"><img id="eagle3"  src="../img/eagle-face.gif" alt="eagle3"  class="imgEagle3">
            <img id="Perso"  src="../img/flying-eagle.gif" alt="Personnage"  class="imgPerso">
            <img id="PersoDrone"  src="../img/drone-flying.gif" alt="Personnage"  class="imgPersoDrone">
            <img id="dragon"  src="../img/dragoon.gif" alt="dragonimg"  class="imgDragon">
            <img id="dragonJ2"  src="../img/dragoon.gif" alt="dragonimg"  class="imgDragon">

            <img id="bouleFeu"  src="../img/boulefeu.gif" alt="bouleimg"  class="imgBouleFeu">

            <img id="imgTest"  src="../img/bouleFeu.gif" alt="Pierre"  class="cloneImage">
            <img id="dragonBot"  src="../img/dragon2.gif" alt="dragon2"  class="imgDragon2"><
            <img id="imageDef"  src="../img/flying-eagle.gif" alt="eagleIm"  class="imageDef"></div>


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
    <script src="dragoonmulti.js"></script>

</body>
</html>