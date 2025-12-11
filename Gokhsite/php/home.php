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

            <h1> <a href="home.php"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

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
<!--
            <div class="underHeadTxt">
              <a href="../home.php">Pour passer sur la version fun du site cliquez ici!!</a>
           
            </div>
            -->

        </div>

        <div class="mainFontDark">


        <div class="video-container2">
            <div class="video-element2">
            <iframe width="560" height="315"
                src="https://www.youtube.com/embed/XUUaTmWblEA?si=59apWVLU-7NZ74aJ"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

            <div class= "video-container2-text"> Ceci est le site de Gokhan Productions regroupant les différents travaux de conception de cartes, de montages vidéos et montages audio.<br><br> Enjoy!!<br>
            </div>
            </div>
            
            </div>

<div class="maintFontBlue">
        <div class="image-container">

            <div class="image-content">
            <a href="videos.php">  <img src="../img/imagelienvideo.png">   <p>Videos</p> </a>
        </div>

        <div class="image-content">
            <a href="board.php">  <img src="../img/imglienboard.png">   <p>Home made PCB</p> </a>
        </div>

        <div class="image-content">
            <a href="others.php">  <img src="../img/drone2.gif">  <p>Others</p> </a>

        </div>

        <div class="image-content">
            <a href="games.php">  <img src="../img/imgliengame.png"> <p>Games</p> </a>
          </div>

</div>


</div>

<?php require_once(__DIR__ . '/footer.php'); ?>



        
   

    <script src="script.js"></script>

</body>
</html>