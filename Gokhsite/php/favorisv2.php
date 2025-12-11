
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


    <?php require_once(__DIR__ . '/nav.php'); ?>

    <main>

        <div class="mobileHeader">
        <br><br>
        </div>


        <div class="underHeaderSea">
            <div class="underHeadTxtSea">My List
            </div>
        </div>
        
  
  

<div class="video-container-slide" id="video-container-slide">



        </div>

<div class="controls">
<button class="prev">←</button>
<div class="dots">
 
</div>
<button class="next">→</button>
</div>

<?php if (isset($_SESSION['username'])): ?>
    <div class="getvideo-container">
<center><button id="getvideo" class="getvideo" onclick="getActiveSrc('delete')">Delete video</button>
</center>
</div>


<?php endif; ?>

<?php 
$refresh = false; // Declare the variable
?>


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
        $lienframe = []; 
            $sqlQuery = 'SELECT * FROM ytlink where pseudo=:pseudo';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute(  [':pseudo'=> $_SESSION['username'],]);
            $liens = $usersStatement->fetchAll();
            $i=0;
            foreach ($liens as $lien) {

                $lienframe[$i]=$lien['lien'];
                $i++;
            }

            $jsonLiens = json_encode($lienframe);
            
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Passer la variable PHP $lienframe à JavaScript en utilisant json_encode
        var lienframe = <?php echo $jsonLiens; ?>;

        // Afficher le deuxième élément du tableau lienframe dans la console
        console.log("echo reussi", lienframe[1]);
        createslides(lienframe);
    
        // Appeler la fonction createslides avec le tableau lienframe
       // createslides(lienframe);
    });
</script>

<script src="listscript.js">
</script>

 



</body>
</html>