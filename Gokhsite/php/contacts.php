<?php require_once(__DIR__ . '/header.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="connect-src 'self' https://api.emailjs.com;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOKHAN PROD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <style>
         h4{color:rgb(116, 0, 0);
            font-size:2em;
            margin-top:2em;
           
            width:100%;
            border-top: 3px solid rgb(0, 0, 0) ;
            background: linear-gradient(to bottom,rgba(2, 84, 117, 0),rgba(72, 182, 186, 0)); /* Dégradé de couleur */

            
        }
        body{           max-width:100%;
        }
       .table-container2{
            align-items:center;
        }
        .changeinfo{display:flex;
            flex-direction:column;
            justify-content: center;  /* Espacement entre les éléments */
            margin-top: 1em;
            text-align:center;
            color :white;
            margin-bottom:1em;
            align-items: center; /* Centre les éléments horizontalement */

        }
       

        .login-container2 {
            background : linear-gradient(to top,rgb(241, 255, 255),rgb(192, 199, 233)); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 75%;
            margin-top:1em;
            margin-bottom:2em;
            justify-content: center;  /* Espacement entre les éléments */
            text-align: center;
            color :black;
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
                       max-width:100%;

        }
        .login-container2  button:hover {
    
            background-color: #0056b3;
        }

      
        .inputmsg{
            width: 100%;
    }

       
        button:hover {
            background-color: #0056b3;
            shadow: 2px 2px 2p    #0056b3;

        }

        table{            
            background : linear-gradient(to top,rgb(241, 255, 255),rgb(192, 199, 233)); 
            margin-bottom:2em;
        }
        td{color:black!important;
            word-wrap: break-word; /* Permet de revenir à la ligne */
        }
    
        @media screen and (max-width: 768px){
            h2{margin-top:3em;}
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
           text-align: left;

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
            text-align: left;

        }
        .table-container2{
            overflow-x: auto; /* Permet le défilement horizontal si nécessaire */
            width:100%
        }
    }


    </style>

</head>
<body>
    <header>

        <div class="fondH1">

            <h1> <a href="home.html"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@gokhan-kaz" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>



    <?php require_once(__DIR__ . '/nav.php'); ?>

    <main>

        <div class="underHeader">

            <div class="underHeadTxt2">
              <h2><br>Contacts</h2>
           
            </div>
        </div>

        <div class="mainFontDark">
           
            <p>You can send me a message! </p><br>

            <form id="emailForm" class="emailbox">
                <input type="text" id="name" placeholder="your name" required><br>
                <input type="email" id="email" placeholder="Email" required><br>
                <textarea id="message" placeholder="Message" required></textarea><br>
                <button type="submit" class="mailButton">SEND</button>
            </form>
        
        </div>

    <!--
    <form action="https://formspree.io/f/xrbplaqg" method="POST" class="emailbox">
  <label>
    Your email:
    <input type="email" name="email">
  </label>
  <br><br>
  <label>
    Your message:
    <textarea name="message"></textarea>
  </label>
  <button type="submit" class="mailButton">Send</button>
</form>
-->

<?php if(isset($_SESSION['username'])) : ?>
<div class="changeinfo" id="changeInfo">
<h4> Global messages</h4>

<div class="login-container2">

<form method="POST" action="">

enter your message :
<input class="inputmsg" type="textarea" name="message" placeholder="write your message, max 255 char" required>
<!--
<textarea class="inputmsg"   name="message" placeholder="write your message, max 255 char" required></textarea><br>
    -->
<button type="submit">Submit</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message'])) {
$message = $_POST['message'];

$sqlQuery = ' INSERT INTO genchat(exp,message) values (:exp,:message)';
$insert = $mysqlClient->prepare($sqlQuery);
$insert->execute([
':exp' => $_SESSION['username'],
':message' => $message,
]);
//echo '<meta http-equiv="refresh" content="0;url=contacts.php">';
echo 'message have been sent ';

}
?>

</div>
</div>

  
<div class="table-container2">
           <center><table><caption> <p style="color: white;">Everybody can see messages here </p></caption>
        <tr><th>pseudo</th><th>message</th></tr>
        <?php
        $sqlQuery = 'SELECT * FROM genchat  ORDER BY id ASC' ;
            
            $mailStatement = $mysqlClient->prepare($sqlQuery);
            $mailStatement->execute([
                
            ]);
            $msgs = $mailStatement->fetchAll();
            foreach($msgs as $msg){
            echo "<tr><td>".$msg['exp']."</td><td>".$msg['message'];
            /*
            if($mail['lu']!="")echo "</td><td>yes</td></tr>";
            else echo "</td><td>No</td></tr>";
           
            */

               // Redirect to the same page to avoid resubmission
              
            }
          

         
            ?>
                        </table></center><div>
       
    <?php endif; ?>

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



<script>
    //SEND  EMAIL
    
    emailjs.init({ publicKey: "4zP-wgAhJAtrNy-rN" });
    
    (function() {
        emailjs.init("4zP-wgAhJAtrNy-rN"); // Remplacez par votre User ID
    })();
    
    document.getElementById("emailForm").addEventListener("submit", function(event) {
        event.preventDefault();
    
        emailjs.send("service_99uqgvl", "template_4jp47ws", {
            from_name: document.getElementById("name").value,
            from_email: document.getElementById("email").value,
            message: document.getElementById("message").value
        }).then(function(response) {
            alert("Email envoyé avec succès !");
        }, function(error) {
            alert("Échec de l'envoi : " + error.text);
        });
    });
    
    const corsUrl = 'https://cors-anywhere.herokuapp.com/';
const emailjsUrl = 'https://api.emailjs.com/api/v1.0/email/send';

fetch(corsUrl + emailjsUrl, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({
        service_id: 'YOUR_SERVICE_ID',
        template_id: 'YOUR_TEMPLATE_ID',
        user_id: 'YOUR_USER_ID',
        template_params: {
            from_name: document.getElementById("name").value,
            from_email: document.getElementById("email").value,
            message: document.getElementById("message").value
        }
    })
})
.then(response => response.json())
.then(data => {
    console.log('Email envoyé!', data);
})
.catch(error => {
    console.error('Erreur d\'envoi:', error);
});

</script>


    <script src="script.js"></script>

</body>
</html>