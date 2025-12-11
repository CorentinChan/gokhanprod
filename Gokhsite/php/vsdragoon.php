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
    <link rel="stylesheet" href="videos.css">

</head>
<body>



<style>
body{overflow: hidden;}
nav{
    background-image: url(logoC2.png) ;}
.submenu { background-image: url(logoC2.png) ;}
.zonetest{ position:absolute; top : 30em;}
.scoreButton{        display: flex; /* Utilisation de Flexbox */
        justify-content: center; /* Centre le texte horizontalement */
        align-items: center; /* Centre le texte verticalement */
        position :absolute; top :60px;
left : 1000px;height:2em;border-radius: 40%;
color: #ffffff;
    border-radius: 50%; 
    background : linear-gradient(to right,rgb(2, 66, 116),#051e43) ;
    text-align: center; /* Centre le texte horizontalement */
            vertical-align: middle; /* Assure que le texte est bien centré en hauteur */
            line-height: normal; /* Permet de s'assurer que le texte n'est pas décalé */
            border: 2px solid #333; /* Bordure pour le bouton */
            cursor: pointer;}
</style>

<body>
    <header>

        <div class="fondH1">

            <h1> <a href="home.html"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                    <img  src="../img/logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <?php require_once(__DIR__ . '/nav.php'); ?>



    <main>

               


        <div class="game-menu"></div>
        <div class="mainFontBlue">
            <button onclick="startGame()" class="buttonstart" type="button" id="buttonstart" >Start </button>
            <div class="zoneScore">appuyez sur start</div>
            <button id="scorebutton" class="scoreButton">Send score</button>

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
            <div class="txtGame">  <p>Move the dragoon with z,q,s,d <br> move drone with t,f,g,h and change normal/sport mode with r/y Enjoy!!<br>
            Send fireball with m, and p for eagle help!<br>
            </p> 

            <p><em><FONT color = "#00000;" > <font size="1em"> <?php 
            $sqlQuery = 'SELECT * FROM scoredragoon order by score DESC';
        
            $dragoonscoreStatement = $mysqlClient->prepare($sqlQuery);
            $dragoonscoreStatement->execute();
            $dragoonscore = $dragoonscoreStatement->fetchAll();
            $authenticated = false;$scoreplus=false;
            // Vérifier si le pseudo est déjà utilisé
            $i=0;
            echo " classement : <br>";
    
            foreach ($dragoonscore as $scorejeu) {
                $i++;
                echo $i .". ".$scorejeu['pseudo']." | score : " . $scorejeu['score']. "| level max :". $scorejeu['maxlevel']."<br>";
                if ($i>7)break;
            }
                 ?>      </font></p>
                </div>
          </div>
          
        </div>
     
        <div class="imGame"><img id="eagle3"  src="../img/eagle-face.gif" alt="eagle3"  class="imgEagle3">
            <img id="Perso"  src="../img/flying-eagle.gif" alt="Personnage"  class="imgPerso">
            <img id="PersoDrone"  src="../img/drone-flying.gif" alt="Personnage"  class="imgPersoDrone">
            <img id="dragon"  src="../img/dragoon.gif" alt="dragonimg"  class="imgDragon">
            <img id="bouleFeu"  src="../img/boulefeu.gif" alt="bouleimg"  class="imgBouleFeu">

            <img id="imgTest"  src="../img/bouleFeu.gif" alt="Pierre"  class="cloneImage">
            <img id="dragonBot"  src="../img/dragon2.gif" alt="dragon2"  class="imgDragon2"></div>
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
    <!--
    <div class ="zonetest" id="response">zone test  <!-- Zone où la réponse sera affichée -->

    <?php
// Vérifier si les données sont envoyées via POST
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['score'])) {
    // Récupérer la valeur envoyée via POST
    $pseudo = $_SESSION['username'];
    $score =  $_POST['score'];
    $maxlevel =  $_POST['maxlevel'];
    // Afficher la valeur reçue

    $sqlQuery = 'SELECT * FROM scoredragoon';
            
    $dragoonscoreStatement = $mysqlClient->prepare($sqlQuery);
    $dragoonscoreStatement->execute();
    $dragoonscore = $dragoonscoreStatement->fetchAll();
    $authenticated = false;$scoreplus=false;
    // Vérifier si le pseudo est déjà utilisé
    foreach ($dragoonscore as $scorejeu) {
        if ($scorejeu['pseudo'] === $pseudo) {
        
            $authenticated = true;
            if($scorejeu['score']<$score)$scoreplus=true;
            break;
        }
    }

if($authenticated === true){

    if($scoreplus===true){
    $sqlQuery = "UPDATE scoredragoon SET score = :score, maxlevel= :maxlevel WHERE pseudo = :pseudo AND score<:score" ;

    // Préparer la déclaration
    $updatescore = $mysqlClient->prepare($sqlQuery);
    
    $updatescore->execute([
        ':score' => $score,
        ':maxlevel'=>$maxlevel,
        ':pseudo' => $pseudo,
        
    ]);
                }
    }

else{
    $sqlQuery = 'INSERT INTO scoredragoon (pseudo,score) VALUES (:pseudo, :score)';
    $insert = $mysqlClient->prepare($sqlQuery);
    $insert->execute([
        ':pseudo' => $_SESSION['username'],
        ':score' => $score,
    ]);
}


   /* echo "Le pseudo reçu est : " . htmlspecialchars($pseudo) . "le score est" . $score;*/
} else {
   /* echo "Aucune donnée reçue";*/
}


?>
</div>
<script src="vsdragoon.js"></script>

    <script src="script.js"></script>

</body>
</html>