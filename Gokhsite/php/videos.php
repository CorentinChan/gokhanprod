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
    .mainFontDark{
        background-color:black;
    }
    body
    {
        background-color:black;
    }
    .messageserver{
        position :absolute;
        top :170%;left:85%;
        display:block
        color:white;
    }

        .getvideo{
    position :absolute;
    top :160%;left:85%;

    font-size: 1em;
text-align: center;
color: #ff0000;
border: 3px solid #d6b409;
border-radius: 50px;
background: linear-gradient(to right, #ffe7b3, #ffdb38);
        }





@media screen and (max-width: 768px)
{
    .getvideo{
    position :absolute;
    top :75%;left:85%;
    font-size: 0.6em;
    align-items: center;
}

    </style>


<?php require_once(__DIR__ . '/nav.php'); ?>

    <main>

        <div class="underHeader2">
            <div class="underHeadTxt2">
                <h2>VIDEOS</h2>

            </div>
        </div>
        <div class="mainFontDark">
           
            <p>My videos are on Youtube  <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL </a>
                <p>Below to enjoy here! </p><br>
                

            <div class="video-container-slide">
            
                            <div class="video-slide">
              <iframe width="320" height="240" src="https://www.youtube.com/embed/sedY-kQQtPA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-slide">
                <iframe width="1022" height="575" src="https://www.youtube.com/embed/nuW6EpxjPCs" title="test tpu osmo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            
            </div>
            <div class="video-slide">
                <iframe width="1022" height="575" src="https://www.youtube.com/embed/qysAAWqE4nw" title="cap frehellut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>           
          </div>
          <div class="video-slide">
            <iframe width="1022" height="575" src="https://www.youtube.com/embed/C6l50iyIjtw" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      

          </div>
          <div class="video-slide">
          <iframe width="1022" height="575" src="https://www.youtube.com/embed/XUUaTmWblEA" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      
         
          </div>
          
          
          </div>

          <div class="controls">
            <button class="prev">←</button>
            <div class="dots">
            <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            <button class="next">→</button>
          </div>
    
    

        <?php if (isset($_SESSION['username'])): ?>
    <div class="getvideo-container">
<center><button id="getvideo" class="getvideo" onclick="getActiveSrc()">Add to MyList</button>
</center>
</div>

<?php endif; ?>

</div>


<?php
// Vérifier si les données sont envoyées via POST
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['lienyt'])) {
    // Récupérer la valeur envoyée via POST
    $lienyt =  $_POST['lienyt'];
    // Afficher la valeur reçue

    $sqlQuery = 'SELECT * FROM ytlink where pseudo=:pseudo';
            
    $ytStatement = $mysqlClient->prepare($sqlQuery);
    $ytStatement->execute([
        ':pseudo' => $_SESSION['username'],
    ]);
    $ytlink = $ytStatement->fetchAll();
    $authenticated = false;$nb=0;
    // Vérifier si le pseudo est déjà utilisé
    foreach ($ytlink as $link) {
        if ($link['lien'] === $lienyt) {
            $authenticated = true; 
            break;
        }
        $nb++;
    }

if($authenticated === true){

   echo '<div id="messageserver" class="zonetest">already on list ';
    }
else if ($nb>7) echo '<div id="messageserver" class="messageserver">Ce message sera caché après 5 secondes.</div>';
else{
    $sqlQuery = 'INSERT INTO ytlink (pseudo,lien) VALUES (:pseudo, :lien)';
    $insert = $mysqlClient->prepare($sqlQuery);
    $insert->execute([
        ':pseudo' => $_SESSION['username'],
        ':lien' => $lienyt,
    ]);
}


}
?>        
        <div class="image-container">

            <div class="image-content">
            <a href="forest.php">  <img src="../img/headerforest.webp"> </a>
            <a href="forest.php">  <p>Forest Videos</p> </a>
        </div>

        <div class="image-content">
            <a href="sea.php" >  <img src="../img/headersea.png"> <p>Sea Videos</p> </a>
        </div>

        <div class="image-content">
            <a href="purefpv.php">  <img src="../img/drone5.gif"> <p>Pure FPV Videos</p> </a>

        </div>

        <div class="image-content">
            <a href="mountains.php" >  <img src="../img/headergokhanprod.png"> <p>Moutains Videos</p> </a>
          </div>

</div>
        <div class="mainFontIm">
            

                <div class="video-container">
                 <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/sedY-kQQtPA"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nuW6EpxjPCs" title="test tpu osmo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>            
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qysAAWqE4nw" title="cap frehellut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>           
                <iframe width="560" height="315" src="https://www.youtube.com/embed/C6l50iyIjtw" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      
        </div>

</div>
</div>
<img id="eagle3" src="../img/eagle-face.gif" alt="eagle3"  class="imgEagle3">
    </main>

    <footer class="footer">
        
        <div class="footer-content">
        <a href="https://gokhanprod.neocities.org/home.php" rel="noopener noreferrer" >  <img src="../img/fond1.png" alt="logo" title="logo" ><div class="textFooter">Website Fun Version</div></a> 
    </div>

    <div class="footer-content">
        <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer" >  
        <img src="../src/logoyt.png" alt="youtube logo" title="Youtube URL">  <div class="textFooter">My Youtube URL </div></a>
    </footer>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="script.js"></script>

</body>
</html>