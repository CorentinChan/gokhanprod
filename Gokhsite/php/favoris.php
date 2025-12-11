
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

       

        <div class="underHeaderSea">
            <div class="underHeadTxtSea"><h1>My List</h1>
            </div>
        </div>
        
  <br><br>


        <?php
        // Vérifie si le formulaire a été soumis
        $lienframe = []; 
            // On récupère tout le contenu de la table users
            $sqlQuery = 'SELECT * FROM ytlink where pseudo=:pseudo';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute(  [':pseudo'=> $_SESSION['username'],]);
            $liens = $usersStatement->fetchAll();
            $i=0;
            // Vérifier si le pseudo est déjà utilisé
            foreach ($liens as $lien) {

                $lienframe[$i]=$lien['lien'];
                $i++;
            }

    
        ?>

  

<div class="video-container-slide">
    <div class="video-slide">
        <iframe width="560" height="315" src= <?php echo $lienframe[0]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    <div class="video-slide">
    <iframe width="560" height="315" src= <?php echo $lienframe[1]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
            <div class="video-slide">
            <iframe width="560" height="315" src= <?php echo $lienframe[2]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
<div class="video-slide">
<iframe width="560" height="315" src= <?php echo $lienframe[3]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<div class="video-slide">
<iframe width="560" height="315" src= <?php echo $lienframe[4]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<div class="video-slide">
<iframe width="560" height="315" src= <?php echo $lienframe[5]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>  
</div>
  <div class="video-slide">
  <iframe width="560" height="315" src= <?php echo $lienframe[6]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
    <div class="video-slide">
    <iframe width="560" height="315" src= <?php echo $lienframe[7]; ?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

<?php
// Vérifier si les données sont envoyées via POST
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lienyt'])) {
    // Récupérer la valeur envoyée via POST
    $lienyt = $_POST['lienyt'];
    
    // Préparer la requête SQL pour supprimer une ligne où pseudo et lien correspondent
    $sqlQuery = 'DELETE FROM ytlink WHERE pseudo = :pseudo AND lien = :lien';
    
    // Préparer la requête
    $delete = $mysqlClient->prepare($sqlQuery);
    
    // Exécuter la requête avec les paramètres
    $delete->execute([
        ':pseudo' => $_SESSION['username'],
        ':lien' => $lienyt,
    ]);
    
    echo 'delete';

    
}
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

    <script src="script.js"></script>

</body>
</html>