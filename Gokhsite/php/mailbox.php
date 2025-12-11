

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
            background: linear-gradient(to bottom,rgba(2, 84, 117, 0),rgba(72, 182, 186, 0)); /* Dégradé de couleur */
            <?php endif; ?>
        }

        .changeinfo{display:flex;
            flex-direction:row;
            justify-content: center;  /* Espacement entre les éléments */
            margin-top: 6em;
        }
        .texte{padding:1em;
            padding-top:4em;
            margin-top:2em;
            justify-content:center;
            text-align:center;
        }
        .texte  p {padding:1em;
            margin-bottom:2em;
            text-align:center;
            color:white;
        }
        .texte a{
                margin-top:2em;
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
        .texte a:hover{
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
            width: 75%;
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
            text-align: left;

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

        .inputdest{
            padding : 10px;
            margin-left:3em;
            text-align: left;
            max-width: 50%;
            font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 1em;
        }
        .inputmsg{
            width: 100%;
            height:10em;
        }

       .deco {
            width: 200px;
            padding: 10px;
            margin-top:2em;
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

        table{            
            background : linear-gradient(to top,rgb(241, 255, 255),rgb(192, 199, 233)); 
            margin-bottom:2em;
            align-items:center;
           justify-content:center;
           text-align:center;
        }
        td{color:black!important;
            word-wrap: break-word; /* Permet de revenir à la ligne */
        }
        .table-container2{
           align-items:center;
           justify-content:center;
           text-align:center;
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
        table{            
           max-width:100%;
           overflow-x: auto;
        }
        td, th {
    white-space: nowrap;
  }
        .texte{
            padding:1em;
            padding-top:1em;
            margin-top:1em;}
            .texte a{
                margin-top:2em;
            padding:1em;
            margin-right:10px;
            margin-left:10px;
            color:rgb(194, 255, 255) ;       }

            td{color:black!important;
                max-width:70%;
            word-wrap: break-word; /* Permet de revenir à la ligne */
        }
        .table-container2{
            overflow-x: auto; /* Permet le défilement horizontal si nécessaire */
        }
    }


    </style>


<body>

<?php require_once(__DIR__ . '/nav.php'); ?>


<main>
    <?php if (!isset($_SESSION['username'])) : ?>
    
      
            <p>Pour se connecter, <a href ="login.php">cliquez ici</a></p>
        </div>

    <?php else : ?>


    <div class="changeinfo">

<div class="login-container2">
<h3> Send message</h3>   

<form method="POST" action="">
    <div class = "inputdest">

        <label for="pseudo">Users list :</label><br>
        <select name="dest" id="pseudo">
<?php
$sqlQuery = 'SELECT * FROM users ';
    
    $usersStatement = $mysqlClient->prepare($sqlQuery);
    $usersStatement->execute([
    ]);
    $users = $usersStatement->fetchAll();
    foreach($users as $user){
    echo ' <option value="'.$user['pseudo'].'">'.$user['pseudo']."</option>";

    }
    ?>
            </select>
    
<br><br><br>
Message : 
</div>

<input class="inputmsg" type="textarea" name="message" placeholder="write your message, max 255 char" required>
<!--
<textarea class="inputmsg"   name="message" placeholder="write your message, max 255 char" required></textarea><br>
    -->
<button type="submit">Submit</button>

</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])&&isset($_POST['dest']) ) {
$dest = $_POST['dest'];
$message = $_POST['message'];

$sqlQuery = ' INSERT INTO mailbox(exp,dest,message) values (:exp,:dest,:message)';
$insert = $mysqlClient->prepare($sqlQuery);
$insert->execute([
':exp' => $_SESSION['username'],
':dest' => $dest,
':message' => $message,
]);

echo "<h5>message have been sent</h5>";
//echo '<meta http-equiv="refresh" content="0;url=mailbox.php">';

}

?>
</div>
</div>

<div class="info-container">

    <h2> Your private messages</h2>
    <div class="table-container2">

             <center><table>
        <tr><th>expediteur</th><th>message</th></tr>
        <?php
        $sqlQuery = 'SELECT * FROM mailbox where dest=:pseudo';
            
            $mailStatement = $mysqlClient->prepare($sqlQuery);
            $mailStatement->execute([
                ':pseudo'=>$_SESSION['username'],
            ]);
            $mails = $mailStatement->fetchAll();
            foreach($mails as $mail){
            echo "<tr><td>".$mail['exp']."</td><td>".$mail['message'];
            /*
            if($mail['lu']!="")echo "</td><td>yes</td></tr>";
            else echo "</td><td>No</td></tr>";
            */
            }
            ?>
                        </table></center>
        </div>
        </div>
    <?php endif; ?>

    <script src="script.js"></script>
    </main>
    
</body>

<?php require_once(__DIR__ . '/footer.php'); ?>


</html>
