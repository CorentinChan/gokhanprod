
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
    .favbutton{position:absolute; top:-20px;}
        </style>


    <?php require_once(__DIR__ . '/nav.php'); ?>

    <main>

        <div class="mobileHeader">
            <div class="mainFontBlue">
           
                <p>My videos are on Youtube  <a href="https://www.youtube.com/@gokhan-kaz
" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL </a>
                    Below to enjoy here! </p><br>
                </div>
        </div>


        <div class="underHeaderSea">
            <div class="underHeadTxtSea">
                <h2>VIDEOS<br> On sea</h2>

            </div>
        </div>
        
    

        <div class="video-container-slide">

        
        <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/X5X0mCf8y1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-UzhECq7BEk?si=2Iw7ek6C5HuODbjJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/k5uK3dD4TBY?si=t5JxPU9Dq6erJi_K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>        </div>
        

    <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3E703x5eaOY?si=AgzPEgjuWVB0Cg7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dNTYEcgArCI?si=NAVh_kbYyi2n2yDP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    </div>
    <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/gihwFqllubs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
  
<div class="video-slide">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/48Gu08XzGYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<div class="video-slide">
<iframe width="560" height="315" src="https://www.youtube.com/embed/qysAAWqE4nw" title="cap frehellut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>           
</div>
<div class="video-slide">
<iframe width="560" height="315" src="https://www.youtube.com/embed/C6l50iyIjtw" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    
  </div>
  <div class="video-slide">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/sedY-kQQtPA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video-slide">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tEB86jjrQyM?si=hnClgyox9ZMFIhmB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
  <span class="dot"></span>
  <span class="dot"></span>


</div>
<button class="next">→</button>
</div>
</div>

<?php if (isset($_SESSION['username'])): ?>
    <div class="getvideo-container">
<center><button id="getvideo" class="getvideo" onclick="getActiveSrc()">Add to MyList</button>
</center>
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
             <iframe width="560" height="315"
                src="https://www.youtube.com/embed/sedY-kQQtPA"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/48Gu08XzGYw?si=nMvkajmRoylCuPzl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>         
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qysAAWqE4nw" title="cap frehellut" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>           
            <iframe width="560" height="315" src="https://www.youtube.com/embed/C6l50iyIjtw" title="remix crête 2,7k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      
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

</body>


</html>