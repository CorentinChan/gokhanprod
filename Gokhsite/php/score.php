
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




<div class="mainFontBlue">
<p>
<?php  

if (isset($_SESSION['username'])){
    $pseudo = $_SESSION['username'];

    $sqlQuery = 'SELECT * FROM scoredragoon';
            
            $dragoonscoreStatement = $mysqlClient->prepare($sqlQuery);
            $dragoonscoreStatement->execute();
            $dragoonscore = $dragoonscoreStatement->fetchAll();
            $authenticated = false;$scoreplus=false;
            // Vérifier si le pseudo est déjà utilisé
            foreach ($dragoonscore as $scorejeu) {
                if ($scorejeu['pseudo'] === $pseudo) {
                
                echo "your dragoon game best score is : ".$scorejeu['score']. ",level max :". $scorejeu['maxlevel'];
                    
            }
            }

        }
        ?>
    </p>
      
    <div class="info-container">
    <caption><h2> classement </h2></caption>
    <div class="table-container">
<table class="table2">
<tr><th>Position</th><th> Pseudo </th>  <th> score</th> <th>level max</tr>

    <p><?php

$sqlQuery = 'SELECT * FROM scoredragoon order by score DESC limit 8' ;
        
        $dragoonscoreStatement = $mysqlClient->prepare($sqlQuery);
        $dragoonscoreStatement->execute();
        $dragoonscore = $dragoonscoreStatement->fetchAll();
        $authenticated = false;$scoreplus=false;
        // Vérifier si le pseudo est déjà utilisé
        $i=0;

        foreach ($dragoonscore as $scorejeu) {
            $i++;
            echo "<tr><td>". $i ."</td><td> ".$scorejeu['pseudo']."</td>  <td> " . $scorejeu['score']. "</td> <td>". $scorejeu['maxlevel']."</tr>";
            if ($i>10)break;
        }
             ?>     </p>

    </table>
    </div>
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