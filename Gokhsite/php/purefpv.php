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
<body>
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

    <style>
        .getvideo{
    position :absolute;
    top :150%;left:85%;

    font-size: 1em;
text-align: center;
color: #ff0000;
border: 3px solid #d6b409;
border-radius: 50px;
background: linear-gradient(to right, #ffe7b3, #ffdb38);

}

@media screen and (max-width: 768px)
{
    .HeaderForest{display:none;}
    .getvideo{
    position :absolute;
    top :70%;left:85%;
    font-size: 0.6em;
    align-items: center;
}s
    </style>

    <?php require_once(__DIR__ . '/nav.php'); ?>

   

    <main>
        <div class="mobileHeader">
            <div class="mainFontDark">
           
                <p>My videos are on Youtube  <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                    <img src="../img/logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL </a>
                    Below to enjoy here! </p><br>
                </div>
        </div>
        <div class="underHeader">
            <div class="underHeadTxt2">
                <h2>VIDEOS<br><br>Pure FPV</h2>

            </div>
        </div>

            <div class="video-container-slide">
     
            <div class="video-slide">
                    <iframe width="1039" height="584" src="https://www.youtube.com/embed/LavSBi0I0WA?si=UeJH-M6WM1dXJK7k" title="March session" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

            <div class="video-slide">
                    <iframe width="1039" height="584" src="https://www.youtube.com/embed/z69K_o6WwtQ" title="March session" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              
                <div class="video-slide">
                    <iframe width="1039" height="584" src="https://www.youtube.com/embed/HTq9FiFlJ0U" title="barre vincennes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="video-slide">
                    <iframe width="1039" height="584" src="https://www.youtube.com/embed/-Mg4ED2a0c8?si=2nH4_gUswi7qXjP0" title="March session" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-slide">
                    <iframe width="1039" height="584" src="https://www.youtube.com/embed/PDd-7jobu_s" title="montesson gyroflow" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="video-slide">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nuW6EpxjPCs?si=keOMAN949mOoLebf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        
                         </div>

            <div class="video-slide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/lv6YzC26IRo?si=8RMgd2dQrxCsG6qM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  
            </div>

    <div class="video-slide">
        <iframe width="1039" height="584" src="https://www.youtube.com/embed/-PdPb3NMPzg" title="forêt Paris ouest" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    
    </div>
<div class="video-slide">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/95MvBFuz6KI?si=pqwilmYbM0IZAZO3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>
            <button class="next">→</button>
          </div>
        </div>
        <?php if (isset($_SESSION['username'])): ?>
<button id="getvideo" class="getvideo" onclick="getActiveSrc()">Add to MyList</button>

<?php endif; ?>

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

        <div class="mainFontIm">
            

                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/LavSBi0I0WA?si=UeJH-M6WM1dXJK7k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Kvw02ydTpb8?si=AnkKg67ihBlZo9L2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lv6YzC26IRo?si=8RMgd2dQrxCsG6qM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ptw_SWM59aw?si=znyf2OZQL0nEzWcs&amp;start=68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</div>
<img id="eagle3" src="../img/eagle-face.gif" alt="eagle3"  class="imgEagle3">
    </main>

    <?php require_once(__DIR__ . '/footer.php'); ?>


    <script src="script.js"></script>

</body>
</html>