<?php
error_reporting(0);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>


<?php require_once(__DIR__ . '/header.php'); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOKHAN PROD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<script src="listscript.js" defer>
</script>
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
    top :160%;left:85%;

    font-size: 1em;
text-align: center;
color: #ff0000;
border: 3px solid #d6b409;
border-radius: 50px;
background: linear-gradient(to right, #ffe7b3, #ffdb38);


}

.mainFontBlue{
    background: linear-gradient(to right, #090d2d, #000000); /* Dégradé de couleur */
}
body{
    background: linear-gradient(to right, #090d2d, #000000); /* Dégradé de couleur */
}
@media screen and (max-width: 768px)
{
    .HeaderForest{display:none;}
    .getvideo{
        font-size: 0.6em;
        align-items: center;
    position :absolute;
    top :70%;left:85%;
    }
}


    </style>



    <?php require_once(__DIR__ . '/nav.php'); ?>


    <main>

        
        <div class="HeaderForest">
            <!--
            <div class="underHeadTxt2">
                <h2>VIDEOS<br>In Forest</h2>

            </div>
            -->
        </div>

        <div class="mainFontBlue">
           
           <p>My videos are on Youtube  <a href="https://www.youtube.com/@gokhan-kaz" target="_blank" rel="noopener noreferrer">
               <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL </a>
               Below to enjoy here! </p><br>

               
<div class="video-container-slide" id="video-container-slide">



        </div>

        
        <div class="controls">
<button class="prev">←</button>
<div class="dots">
 
</div>
<button class="next">→</button>
</div>
    
<?php if (isset($_SESSION['username'])): ?>
<button id="getvideo" class="getvideo" onclick="getActiveSrc()"> Add to MyList </button>

<?php endif; ?>



<?php if (isset($_SESSION['username']) && $_SESSION['username']==='gokhan'): ?>
    <div class="adminZone">
    <ul class='tableUrl'>
            <h3>Modify video URL<h3>

    </ul>
<button type='button ' class="changeButton" id='changeUrl' onclick='getUrl("forest")'  >Change Url</button>
</div>
<?php endif; ?>


</div>
        <div class="mainFontIm">
            

           

<div class="video-container" id="videosBottom">
         
</div>

<?php if (isset($_SESSION['username']) && $_SESSION['username']==='gokhan'): ?>
    <div class="adminZone">
    <ul class='tableUrlBot'>
            <h3>Modify video URL<h3>

    </ul>
<button type='button ' class="changeButton" id='changeUrl' onclick='getUrlBot("forest&bot=true")'  >Change Url</button>
</div>
<?php endif; ?>

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

    <?php
// Vérifier si les données sont envoyées via POST
error_reporting(E_ALL);
ini_set('display_errors', 1);


?>


<?php
        $lienframe = []; 
            $sqlQuery = 'SELECT * FROM videosUrl where category = "forest" ';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute();
            $liens = $usersStatement->fetchAll();
            $i=0;
            foreach ($liens as $lien) {

                $lienframe[$i]=$lien['url'];
                $i++;
            }

            $jsonLiens = json_encode($lienframe);

              $lienBottom = []; 
            $sqlQuery = 'SELECT * FROM videosBottom where category = "forest" ';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute();
            $liensBot = $usersStatement->fetchAll();
            $i=0;
            foreach ($liensBot as $lien) {

                $lienBottom[$i]=$lien['url'];
                $i++;
            }

            $jsonLiensBottom = json_encode($lienBottom);
            
?>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Passer la variable PHP $lienframe à JavaScript en utilisant json_encode
        var lienframe = <?php echo $jsonLiens; ?>;
        var lienframeBot = <?php echo $jsonLiensBottom; ?>;

        // Afficher le deuxième élément du tableau lienframe dans la console
        console.log("echo reussi", lienframe[1]);
        createslides(lienframe);
        tableUrlDisplay(lienframe);
        tableUrlBotDisplay(lienframeBot);
        let iframe='';

        lienframeBot.forEach(function(element) {
            iframe += `  <iframe width="560" height="315" src=" ${element}  "
         title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
         gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>` 
        
        });
        /*
        for(let i=0;i<4;i++){ 
         iframe += `  <iframe width="560" height="315" src=" ${lienframeBot[i]}  "
         title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
         gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>` 
         }*/
         document.getElementById('videosBottom').innerHTML= iframe;


        // Appeler la fonction createslides avec le tableau lienframe
       // createslides(lienframe);
    });
</script>





</body>
</html>