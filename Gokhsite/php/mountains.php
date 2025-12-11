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
                <a href="https://www.youtube.com/@gokhan-kaz" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <style>
        .mainFontBlue{
    background: linear-gradient(to right, #090d2d, #000000); /* Dégradé de couleur */
}
body{
    background: linear-gradient(to right, #090d2d, #000000)!important; /* Dégradé de couleur */
}
</style>


    <?php require_once(__DIR__ . '/nav.php'); ?>

    <main>


        <div class="underHeader">
            <div class="underHeadTxt2">
                <h2>VIDEOS<br><br>In Mountain</h2>

            </div>
        </div>
        <div class="mainFontblue">
        <div class="mobileHeader">
           
                <p>My videos are on Youtube  <a href="https://www.youtube.com/@gokhan-kaz" target="_blank" rel="noopener noreferrer">
                    <img src="../src/logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL </a>
                    Below to enjoy here! </p><br>      
        </div>
        
            <div class="video-container-slide">
     
                <div class="video-slide">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sZO-yAEOguA?si=EnYnbHnnPUw4hwPO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        </div>
<div class="video-slide">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/u5Ng3IUMQT0?si=fX_2stjuujvkglyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   </div>
<div class="video-slide">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5ces87FOAWs?si=ssJPH8GfEy7LucFJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>       </div>
<div class="video-slide">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/ptw_SWM59aw?si=ViLlsLdvGRIxGm9L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

            </div>
        
          <div class="controls">
            <button class="prev">←</button>
            <div class="dots">
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
</div>
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sZO-yAEOguA?si=EnYnbHnnPUw4hwPO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                       
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5ces87FOAWs?si=ssJPH8GfEy7LucFJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ptw_SWM59aw?si=ViLlsLdvGRIxGm9L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/u5Ng3IUMQT0?si=fX_2stjuujvkglyM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</div>
<img id="eagle3" src="../img/eagle-face.gif" alt="eagle3"  class="imgEagle3">


</div>

</main>

<?php require_once(__DIR__ . '/footer.php'); ?>


    <script src="script.js"></script>

</body>
</html>