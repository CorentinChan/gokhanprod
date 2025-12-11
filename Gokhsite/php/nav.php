<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

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
<script defer>
    	
  document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a');
    const currentPath = window.location.pathname;
	console.log("test"+currentPath);
    links.forEach(link => {
      const linkPath = new URL(link.href).pathname;
      if (linkPath === currentPath) {
        link.classList.add('urlActive');
      } else {
        link.classList.remove('urlActive');
      }
    });
  });
</script>
 
<style> 




.logbutton {
    display: block;
    justify-content:center;
    margin-left: 20px; /* Décale le bouton vers la droite */
    left:10px;
    font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 1em;
    background: linear-gradient(to bottom,rgba(0, 23, 62, 0.94),rgba(152, 0, 0, 0.94));
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 20px;
            text-align: center; 
        }

        <?php if (isset($_SESSION['username'])): ?>
            .noconnect{ display:none}
            .connect{ display:block}
            .logbutton{ display:block}  
            <?php else: ?>
                .noconnect{ display:block}
                .connect{ display:none}  
                .logbutton{ display:none}  
            <?php endif; ?>

            
    .urlActive{
font-weight: bold;
text-decoration: none;
color:rgba(224, 222, 52, 1)!important;

}

 .urlActive::after{
  content: "";
  text-decoration: underline;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 2px;
  background-color: red;
  transition: width 0.3s ease; /* animation fluide */
}

  .pseudostyle2{
color:rgb(227, 196, 0);
font-weight: bold;
background: linear-gradient(to right,rgba(108, 0, 0, 0.11),rgba(164, 0, 0, 0.44)); /* Dégradé de couleur */
border-top: 1px solid rgb(129, 0, 0);;
}

.pseudostyle2 a{
color:rgb(227, 196, 0) !important;
font-weight: bold;
}


.pseudostyleb {
    display: inline-block; /* Permet d'appliquer le padding */
    padding: 15px ;
    top: 12px;
    min-width: 4em;
    font-size:1em;
    font-weight: bold;
    background: linear-gradient(to right,rgba(235, 0, 0, 0.05),rgba(202, 17, 17, 0.44)); /* Dégradé de couleur */
    gap:20px;
    transition: background 0.5s ease, transform 1s ease, box-shadow 0.3s ease; /* Transition fluide */
    <?php if($currentpage=="login.php"):?>
    color:rgba(224, 222, 52, 1);
    <?php else: ?>
    color:  white;
    <?php endif; ?>

    border: 2px solid rgb(63, 0, 0);
    border-radius:20px;
}


.pseudostyleb:hover {
    transform: scale(1.1) ; /* Agrandissement et légère rotation */
            box-shadow: 0 10px 20px rgba(9, 38, 115, 0.2); /* Ombre portée au survol */
    background-color: #06565c5c;
    border-radius: 15px;
    background: linear-gradient(to right,rgba(81, 2, 2, 0.66),rgb(163, 0, 0)); /* Dégradé de couleur */
    box-shadow: 0 0 20px 5px rgba(52, 152, 219, 0.7); /* Lueur bleue */

}


            
.pseudostyleb a{
    display: inline-block; 
    padding: 15px ;
    top: 12px;
    min-width: 4em;
    font-size:1em;
    font-weight: bold;
    background: linear-gradient(to right,rgba(235, 0, 0, 0.05),rgba(202, 17, 17, 0.44)); /* Dégradé de couleur */
    gap:20px;
    transition: background 0.5s ease, transform 1s ease, box-shadow 0.3s ease; /* Transition fluide */
color:  white!important;
border: 2px solid rgb(63, 0, 0);
border-radius:20px;
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
    background: linear-gradient(to right,rgba(81, 2, 2, 0.66),rgb(163, 0, 0)); /* Dégradé de couleur */
    box-shadow: 0 0 20px 5px rgba(52, 152, 219, 0.7); /* Lueur bleue */


}

@media screen and (max-width: 768px){
    .logbutton {
width: 100px;
        }
    }

</style>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
echo "<script>console.log('Page actuelle : " . $currentPage . "');</script>";

?>

<nav id="navbar">
        <a href="home.php">  <img class="menuimg" src="../img/logocomplique2.jpg" alt="logo" title="logo" > 
            <a href="home.php"><span class="textmenugokhan"> Gokhan Productions </span></a>
            

       <ul class="menu">
       <li >
               <a class="<?php if($currentPage == 'login.php') echo 'urlActive'; else echo ""; ?>"  href="login.php"><span class="<?php if(isset($_SESSION['username'])) echo 'pseudostyle'; else echo "pseudostyleb"; ?>">
                <?php if(isset($_SESSION['username']))echo $_SESSION['username'];
                else echo "Login"; ?>
                </span></a>

                   <ul class="submenu" id="submenu11">
                  
                   <li class="noconnect"><a href="login.php">Log in</a></li> 
                   <li class="noconnect"><a href="createlogin.php">Subscribe</a></li>
                   <li class="connect"><a href="mailbox.php">Mail Box</a></li>
                   <li class="connect"><a href="score.php">Score</a></li>
                   <li class="connect"><a href="favorisv2.php">My List</a></li>
                   <li><form method="POST" action="">
            <input type="hidden" name="deconnexion" value="true" />
            <button class="logbutton" type="submit">Logout</button>
        </form></li>
               </ul>
           </li>

     

           <li>
               <a class="<?php if($currentPage == 'videos.php') echo 'urlActive'; else echo ""; ?>" href="videos.php"> <span class="textmenu">Videos</span></a>
                   <ul class="submenu" id="submenu1">
                  
                   <li><a href="videos.php">General</a></li>
                   <li><a href="forest.php">Forest</a></li>
                   <li><a href="sea.php">Sea</a></li>
                   <li><a href="mountains.php">Mountains</a></li>
                   <li><a href="purefpv.php">Pure FPV</a></li>
               </ul>
           </li>
           <li>
               <a class="<?php if($currentPage == 'board.php') echo 'urlActive'; else echo ""; ?>" href="board.php"><span class="textmenu">Board Design</span></a>
               <ul class="submenu" id="submenu2">
                   <li><a  href="board.php">General</a></li>
                   <li><a class="<?php if($currentPage == 'fc.php') echo 'urlActive'; else echo ""; ?>" href="fc.php">FC</a></li>
                   <li><a href="esc.php">ESC</a></li>
                   <li><a href="pb.php">Power board</a></li>
               </ul>
           </li>
           <li>
               <a class="<?php if($currentPage == 'others.php') echo 'urlActive'; else echo ""; ?>" href="others.php"><span class="textmenu">Others</span></a>
               <ul class="submenu" id="submenu3">
                   <li><a href="othersdrones.php">Others drones</a></li>
                   <li><a href="3dprints.php">3D prints</a></li>
                   <li><a href="sounds.php">Own Sounds</a></li>
                   <li><a href="games.php">Online Games</a></li>
               </ul>
           </li>
           <li><a class="<?php if($currentPage == 'contacts.php') echo 'urlActive'; else echo ""; ?>" href="contacts.php"><span class="textmenu">Contact</span></a></li>
      
           <li>
              
           </li>

   </ul>
   
   <button class="menugen-button" ><img src="menucon.png"></button>
   <ul class="submenu0" id="submenu0">
    
       <li><a href="videos.php"><span class=submenutitle>VIDEOS</span></a></li>
       <li><a href="forest.php">Forest</a></li>
       <li><a href="sea.php">Sea</a></li>
       <li><a href="mountains.php">Mountains</a></li>
       <li><a href="purefpv.php">Pure FPV</a></li>
       <li><a href="board.php"><span class=submenutitle>Boards</a></li>
       <li><a href="fc.php">FC</a></li>
       <li><a href="esc.php">ESC</a></li>
       <li><a href="pb.php">Power board</a></li>
       <li><a href="others.php"><span class=submenutitle>Others</span></a></li>
       <li><a href="3dprints.php">3D prints</a></li>
       <li><a href="sounds.php">Own Sounds</a></li>
       <li><a href="games.php">Online Games</a></li>
       <li><a href="contacts.php"><span class="submenutitle">Contact</span></a></li>
       <li class="pseudostyle2" >
               <a href="login.php">
                <?php if(isset($_SESSION['username']))echo $_SESSION['username'];
                else echo "My Login"; ?>
                </a> </li>
                  
                   <li class="noconnect"><a href="login.php">Log in</a></li> 
                   <li class="noconnect"><a href="createlogin.php">Subscribe</a></li>
                   <li class="connect"><a href="mailbox.php">Mail Box</a></li>
                   <li class="connect"><a href="score.php">Score</a></li>
                   <li class="connect"><a href="favorisv2.php">Mylist</a></li>
                   <li><form method="POST" action="">
            <input type="hidden" name="deconnexion" value="true" />
            <button class="logbutton" type="submit">Logout</button>
        </form></li>
          



   </ul>


   </nav>

    <ul class="menuMobile">
        <li>
            <a href="videos.php"><span class="textmenu">Videos</span></a>
        </li>
        <li>
            <a href="board.php"><span class="textmenu">Board Design</span></a>
        </li>
        <li>
            <a href="others.php"><span class="textmenu">Others</span></a>
        </li>
        <li ><a href="login.php"><span class="pseudostyle">  <?php if(isset($_SESSION['username']))echo $_SESSION['username'];
                else echo "Login"; ?></span></a></li>
   
        <li>
           
        </li>

</ul>

