<meta name="viewport" content="width=device-width, initial-scale=1.0">
<<?php $_SESSION['funstyle']=false; ?>


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
<link rel="stylesheet" href="stylealt.css">

<style> 


        <?php if (isset($_SESSION['username'])): ?>
            .noconnect{ display:none}
            .connect{ display:block}
            .logbutton{ display:block}  
            <?php else: ?>
                .noconnect{ display:block}
                .connect{ display:none}  
                .logbutton{ display:none}  
            <?php endif; ?>

            .pseudostyle2{
color:rgb(227, 196, 0);
font-weight: bold;
background: linear-gradient(to right,rgba(108, 0, 0, 0.11),rgba(164, 0, 0, 0.44)); /* Dégradé de couleur */
border-top: 1px solid rgb(129, 0, 0);;
}

.pseudostyle2 a{
color:rgb(227, 196, 0);
font-weight: bold;
}


.pseudostyle {
    display: inline-block; /* Permet d'appliquer le padding */
    padding: 15px ;
    top: 12px;
    min-width: 4em;
    font-size:1em;
    font-weight: bold;
    background: linear-gradient(to right,rgba(235, 0, 0, 0.05),rgba(202, 17, 17, 0.44)); /* Dégradé de couleur */
    gap:20px;
    transition: background 0.5s ease, transform 1s ease, box-shadow 0.3s ease; /* Transition fluide */
color:  rgb(205, 187, 0);
border: 2px solid rgb(63, 0, 0);
border-radius:20px;
}
.pseudostyle:hover {
    transform: scale(1.1) ; /* Agrandissement et légère rotation */
            box-shadow: 0 10px 20px rgba(9, 38, 115, 0.2); /* Ombre portée au survol */
    background-color: #06565c5c;
    border-radius: 15px;
    box-shadow: 0 0 20px 5px rgba(52, 152, 219, 0.7); /* Lueur bleue */

}
</style>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOKHAN PROD</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    
</head>
<body>

    <header>

        <div class="fondH1">

            <h1> <a href="home.php"><strong>GOKHAN PRODUCTIONS</strong> </a></h1>
            <div class="fondURL1">
                <a href="https://www.youtube.com/@Corentin-k8j" target="_blank" rel="noopener noreferrer">
                    <img src="logoyt.png" alt="youtube logo" title="Youtube URL"> Youtube URL

                </a>
            </div>
        </div>
    </header>

    <nav id="navbar">
        <ul class="menu">
            <li><a href="home.php">HOME</a></li>
            <li>
                <button class="menu-button" onclick="toggleMenu('submenu1')">VIDEOS</button>
                <ul class="submenu" id="submenu1">
                    <li><a href="videos.php">General</a></li>
                    <li><a href="forest.php">Forest</a></li>
                    <li><a href="sea.php">Sea</a></li>
                    <li><a href="mountains.php">Mountains</a></li>
                </ul>
            </li>
            <li>
               <button class="menu-button" onclick="toggleMenu('submenu2')">Board Design</button>
                <ul class="submenu" id="submenu2">
                    <li><a href="board.php">General</a></li>
                    <li><a href="fc.php">FC</a></li>
                    <li><a href="esc.php">ESC</a></li>
                    <li><a href="pb.php">Power board</a></li>
                </ul>
            </li>
            <li>
                <button class="menu-button" onclick="toggleMenu('submenu3')">Others</button>
                <ul class="submenu" id="submenu3">
                    <li><a href="othersdrones.php">Others drones</a></li>
                    <li><a href="3dprints.php">3D prints</a></li>
                    <li><a href="sounds.php">Own Sounds</a></li>
                    <li><a href="eaglegame.php">Games</a></li>
                </ul>
            </li>
            <li><a href="contacts.php">Contact</a></li>
        </ul>
    </nav>