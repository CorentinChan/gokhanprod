

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

    <style>
        h2{
            margin-top:2em;
            <?php if($_SESSION['username'] ) : ?>
            background: linear-gradient(to bottom,rgba(2, 84, 117, 0.1),rgba(72, 182, 186, 0.19)); /* Dégradé de couleur */
            <?php endif; ?>
        }

        h4{color:rgb(116, 0, 0);
            font-size:2em;
            margin-top:2em;
            width:100%;
            text-align:center;
            border-top: 3px solid rgb(0, 0, 0) ;
            background: linear-gradient(to bottom,rgba(2, 84, 117, 0),rgba(72, 182, 186, 0)); /* Dégradé de couleur */   
        }

        .changeinfo{display:flex;
            flex-direction:row;
            justify-content: center;  /* Espacement entre les éléments */
            margin-top: 3em;
        }
        .texte{padding:1em;
            padding-top:4em;
            margin-top:2em;
            justify-content:center;
            text-align:center;
        }
        .texte  p {padding:1em;
            text-align:center;
            color:white;
        }

        .hrefmenu{padding:1em;
    
            justify-content:center;
            text-align:center;
        }

        .hrefmenu a{
            padding:2em;
            margin-right:5em;
            margin-left:5em;
            border : 2px solid #black;
            border-radius: 20px;
            text-decoration:none;
            color : white !important;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.49);
            background: linear-gradient(to right, #000957, #000000); /* Dégradé de couleur */
            transition: background ease 1s, transform ease 1s;
        }
        .hrefmenu a:hover{
    background: linear-gradient(to left,rgb(5, 191, 77), #000000); /* Dégradé de couleur */
            transform : scale(110%);
        }

        .login-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            position : absolute;
            top : 30em;
            top: 10%; /* Positionne la boîte à 50% de la hauteur de la page */
    left: 50%; /* Positionne la boîte à 50% de la largeur de la page */
    transform: translate(-50%, 50%); /* Ajuste la boîte pour la centrer parfaitement */
        }
        .login-container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            width: 200px;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container  button:hover {
            background-color: #0056b3;
        }
        .login-container2 {
            background : linear-gradient(to top,rgb(241, 255, 255),rgb(192, 199, 233)); 
            padding: 20px;
            margin-left:5em;
            margin-right:5em;
            margin-top :1em;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top:2em;
            text-align: center;
            
        }

        .login-container2:hover {
            background :  linear-gradient(to bottom,rgb(176, 236, 165), #000000); 
        
        }

        .login-container2 input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container2 button {
            width: 200px;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
        .login-container2  button:hover {
            background-color: #0056b3;
        }

       .deco {
            width: 200px;
            padding: 10px;
            margin:2em;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
            shadow: 2px 2px 2p    #0056b3;

        }


        td{color:black!important;
            text-align: left;
        }
    
        @media screen and (max-width: 768px){
            .changeinfo{display:flex;
            flex-direction:column;
            justify-content: center;  /* Espacement entre les éléments */
            }

            .login-container2 {  
            margin-left:2em;
            margin-right:2em;
        }

        .texte{
            display:flex;
            flex-direction:wrap;
            padding:1em;
            padding-top:1em;
            margin-top:1em;
        }

        .hrefmenu{
            display:flex;
            flex-direction:wrap;
            padding:1em;
        }

            .hrefmenu a{
            padding:1em;
            margin-right:10px;
            margin-left:10px;
            color:rgb(194, 255, 255) ;       }

    }


    </style>


<body>

<?php require_once(__DIR__ . '/nav.php'); ?>


<main>
    <?php if (!isset($_SESSION['username'])) : ?>
    
        <div class="login-container">
            <h2>Connexion</h2>
            <form method="POST" action="">
                <input type="text" name="username" placeholder="Nom d'utilisateur" minlength="2" required>
                <input type="password" name="password" placeholder="Mot de passe" minlength="2" required>
                <button type="submit">Se connecter</button>
            </form>
            <?php

            // On récupère tout le contenu de la table users
$sqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();


                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
                 

                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $authenticated = false;
                    
                  
                    foreach ($users as $user){
                        if ( $user['pseudo'] === $username && $user['mdp'] === $password) {
                            $_SESSION['username'] = $username;
                            setcookie("LOGGED_USER", $username, time() + 31536000, "/", "", true, true); // Retenir l'utilisateur pendant 1 an
                            $authenticated = true;
                            break;
                        }
                    }

                    if ($authenticated) {
                        echo '<meta http-equiv="refresh" content="0;url=' . $_SERVER['PHP_SELF'] . '">';
                        exit();                  
                    } else {
                        echo "<p style='color: red;'>Identifiants incorrects</p>";
                          exit();    
                    }

                    
                }
                
            ?>
            <p>Pour créer un compte <a href ="createlogin.php">cliquez ici</a></p>
    <title>Connexion</title>
        </div>

    <?php else : ?>

        <div class="texte">
        <p>Bonjour, <?= isset($_COOKIE['LOGGED_USER']) ? htmlspecialchars($_COOKIE['LOGGED_USER']) : htmlspecialchars($_SESSION['username']); ?></p>
    </div>
    <div class="hrefmenu">
        <a href="score.php">Games Score</a>  <a href="favoris.php">My List</a> <a href="mailbox.php">Mail Box</a>

    </div>
        <!--
        <p style='text-align: center;color:white'>Vous allez etre rediriger dans 5s</p> 
        <meta http-equiv="refresh" content="3;url=home.php">
        
    -->   
        

        <div class="changeinfo">

                     <div class="login-container2">
                <h3>Add or change mail <h3>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="email" required>
            <button type="submit">Submit</button>

        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) ) {
            $email = $_POST['email'];
            $sqlQuery = 'UPDATE users SET mail=:mail where pseudo=:pseudo';
            $insert = $mysqlClient->prepare($sqlQuery);
            $insert->execute([
                ':pseudo' => $_SESSION['username'],
                ':mail' => $email,
            ]);
            echo 'Mail have been changed';

        }
        
?>
 </div>

      <div class="login-container2">
                <h3>Change password <h3>
        <form method="POST" action="">
            <input type="password" name="mdp" placeholder="password" required>
            <button type="submit">Submit</button>

        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mdp']) ) {
            $mdp = $_POST['mdp'];
            $sqlQuery = 'UPDATE users SET mdp=:mdp where pseudo=:pseudo';
            $insert = $mysqlClient->prepare($sqlQuery);
            $insert->execute([
                ':pseudo' => $_SESSION['username'],
                ':mdp' => $mdp,
            ]);
            //echo '<meta http-equiv="refresh" content="1;url=home.php">';
            echo 'Password have been changed';

        }

        
?>
 </div>
    </div>


    <center>
 <h4>  </h4>

 <div class = "info-container">
    <h3> Your data</h3>
    <div class="table-container">

             <table>
        <tr><th>pseudo</th><th>mail</th></tr>
        <?php
        $sqlQuery = 'SELECT * FROM users where pseudo=:pseudo';
            
            $usersStatement = $mysqlClient->prepare($sqlQuery);
            $usersStatement->execute([
                ':pseudo'=>$_SESSION['username'],
            ]);
            $users = $usersStatement->fetchAll();
            echo "<tr><td>".$users[0]['pseudo'];
            if($users[0]['mail']!="")echo "</td><td>".$users[0]['mail']."</td></tr>";
            else echo "</td><td>Not added</td></tr>";
            ?>
                        </table>
        </div>
        </div></center>

        <form method="POST" action="">
            <input type="hidden" name="deconnexion" value="true" />
           <center> <button class="deco" type="submit">Se déconnecter</button> </center>
        </form>
    <?php endif; ?>
    <img src="../img/flying-eagle.gif" alt="Image Traversante" class="imageDef" id="imageToMove">

    <script src="script.js"></script>
    </main>
    
</body>

<?php require_once(__DIR__ . '/footer.php'); ?>


</html>
