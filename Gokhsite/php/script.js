// Lorsque l'utilisateur défile la page
window.onscroll = function() {stickyMenu()};

var navbar = document.getElementById("navbar");
var header = document.querySelector("header");
var sticky = header.offsetHeight; // Hauteur de l'en-tête
var marginBeforeHide = 150; // Marge supplémentaire avant que l'en-tête disparaisse (en pixels)

let audio = new Audio("https://cdn.pixabay.com/download/audio/2022/06/08/audio_3fb279d9fb.mp3?filename=eagle-scream-112940.mp3");

let positionx = 0;
    let positiony =100;
    let image2 = document.getElementById("Eagle2");
    let image3 = document.getElementById("eagle3");
    let image4 = document.getElementById("drone");


function stickyMenu() {
    if (window.pageYOffset > sticky + marginBeforeHide) { // Ajoute une marge avant que l'en-tête disparaisse
        navbar.classList.add("sticky");
        header.style.display = "none"; // Cacher l'en-tête lorsqu'on descend
    } else {
        navbar.classList.remove("sticky");
        header.style.display = "flex"; // Afficher l'en-tête quand on est en haut de la page
    }
}

function isMobile() {
    return /Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
}

if (isMobile()) {
    navbar.classList.add("sticky");
        header.style.display = "none"; // Cacher l'en-tête lorsqu'on descend
    console.log("L'utilisateur est sur un téléphone portable.");
} else {
    console.log("L'utilisateur est sur un ordinateur.");
}

/*lien mort detect */
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll("a"); // Sélectionne tous les liens

    links.forEach(link => {
        link.addEventListener("click", function (event) {
            const url = link.href;
            if (url === "https://gokhanprod.neocities.org/home.html") {
                event.preventDefault();  // Empêche l'ouverture du lien
                alert("coming soon");
                return false;  // Assure que le lien ne sera pas ouvert
            }             
            //    event.preventDefault();  // Empêche l'ouverture du lien
              
            // Si c'est un lien YouTube et qu'il a target="_blank", on ne bloque pas le comportement par défaut
            if (isYouTubeLink(url) && link.target === "_blank") {
                return;
            }

            event.preventDefault(); // Bloque temporairement la navigation pour vérification

            if (isYouTubeLink(url)) {
                window.open(url, "_blank"); // Ouvre dans un nouvel onglet
            } else {
                checkLink(url);
            }
        });
    });
});



// Fonction pour détecter un lien YouTube
function isYouTubeLink(url) {
    return url.includes("youtube.com") || url.includes("youtu.be");
}

// Vérification des autres liens
function checkLink(url) {
    fetch(url, { method: "HEAD", mode: "no-cors" })
        .then(response => {
            if (response.ok || response.status === 0) {
                window.location.href = url;
            } else {
                alert("⚠️ Not available !");
            }
        })
        .catch(() => {
            alert("⚠️ Not available !");
        });
}


// Fonction pour vérifier si c'est un lien YouTube
function isYouTubeLink(url) {
    const regex = /(?:https?:\/\/(?:www\.)?youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/([a-zA-Z0-9_-]+)|[^\n\s]+)?)(?:[^\s&\n]*)/;
    return regex.test(url);
}

// Fonction pour vérifier un lien (autre que YouTube)
function checkLink(url) {
    fetch(url, { method: "HEAD", mode: "no-cors" }) // Vérifier l'URL
        .then(response => {
            if (response.ok || response.status === 0) { 
                // Si le lien fonctionne, on le suit
                window.location.href = url;
            } else {
                alert("⚠️ Le lien semble mort ou inaccessible !");
            }
        })
        .catch(() => {
            alert("⚠️ Le lien est mort ou inaccessible !");
        });
}


       
        //menubouton click outside
      // Ouvrir/fermer le menu
const menuButton = document.querySelector('.menugen-button');
const submenu = document.querySelector('.submenu0');

// Lorsque l'on clique sur le bouton, on bascule l'affichage du sous-menu
menuButton.addEventListener('click', function(event) {
    event.stopPropagation(); // Empêche la propagation de l'événement au document
    const isVisible = submenu.style.display === 'block';
    submenu.style.display = isVisible ? 'none' : 'block';
});

// Fermer le menu si on clique en dehors
document.addEventListener('click', function(event) {
    // Si le clic est en dehors du menu et du bouton
    if (!menuButton.contains(event.target) && !submenu.contains(event.target)) {
        submenu.style.display = 'none';
    }
});






        // Demarrer apres chargement
   
//image defilante
let image = document.getElementById('imageToMove');


document.addEventListener("click", function(event) {

    if(image)        image.style.left = '-150px';})

        // Fonction pour déplacer l'image de gauche à droite
            

function moveImage() {
    image.style.left = window.innerWidth + "px"; // Traverse toute la largeur de l'écran
    

document.addEventListener("click", function(event) {image.style.left = '-150px';})

// Attendre que la page soit chargée, puis commencer l'animation
window.onload = function() {
    moveImage();
};
}
// Si tu veux que l'image traverse à l'infini, tu peux ajouter un intervalle pour redémarrer l'animation

if(image){
setInterval(function() {
    image.style.left = '-150px'; // Retour à la position initiale
    setTimeout(moveImage, 2000); // Relancer le mouvement après un petit délai
}, 10000); // Recommence tous les 10 secondes
}
// son aigle

function playSoundAfterDelay() {
    if (window.location.pathname === "/" || window.location.pathname === "/home") {
        setTimeout(() => {
            audio.play().catch(error => console.log("Lecture bloquée :", error));
        }, 2000); // 2000ms = 2 secondes
    }
}
function demarrage() 
{   console.log("demarrage start")

    if(image2) {
    image2.style.left = positionx + "px";  
    image2.style.top = positiony + "px"; 
    }
playSoundAfterDelay();


if(image) setTimeout(moveImage,2000);
console.log("demarrage done")

}

// Lancer la fonction quand la page est chargée
if (isMobile()==false){
window.onload = demarrage;
}


    //deuxieme image defilante
    function moveImage2(){
        if (positionx > window.innerWidth - 200) {
            positionx = 0;            
        }
        positionx += 10; // Déplacement de 50px
        image2.style.left = positionx + "px";  
    
    if (positiony > window.innerHeight - 10) {
        positiony = 200;}
    positiony += 10; // Déplacement de 50px
    image2.style.top = positiony + "px"; 
    
    }

    if(image2){
    setInterval(function() {
        setTimeout(moveImage2, 3000); // Relancer le mouvement après un petit délai
    }, 40); // Recommence tous les 10 secondes
    }


let changedir=false;
let endAnim=false;

/*
let positionx3=  parseInt(image3.style.left) || 500;
let positiony3=  parseInt(image3.style.top) || 100;
let width3 = parseInt(image3.style.width) || 100;
*/
let positionx3=   500;
let positiony3=   100;
let width3 =  100;


       //3eme image defilante
       function moveImage3(){
        width3 += 20;
        image3.style.width = width3 + "px";  
       // positionx3 += 1; // Déplacement de 50px
        //image3.style.left = positionx3 + "px";  
       
    if (positiony3 > 600) {
        changedir=true;
       }
       if (changedir===true && positiony3 <200) {
        
      if (endAnim===false) {
        image3.style.display="none";
        console.log("endAnim");
       if(isMobile()) audio.play().catch(error => console.log("Lecture bloquée :", error));
    }
      changedir=false;
      endAnim=true;
       }
    if (changedir===true){positiony3 -= 20 // Déplacement de 50px
   }
    else {positiony3+=20;}   
    image3.style.top = positiony3 + "px";  
    }

    let positionx4=10;
    let changedir2=false;
    
    function moveImage4(){
      
      console.log("image4move")
    
    if (changedir2===false) {
        positionx4 += 10 ;
       }
       if (positionx4 > window.innerWidth - 150 )
         {changedir2=true;}   
      /*if ( isMobile() ) 
      {
        if (positionx4 > 300)
            {changedir2=true;}   
      }
    */
    if (changedir2===true){positionx4 -= 10 ;}
   if( positionx4<20){changedir2=false;}

   image4.style.left= positionx4 + "px" ;

}

if(image4){
    setInterval(function() {
        setTimeout(moveImage4, 1000); // Relancer le mouvement après un petit délai
    }, 30); // Recommence tous les 10 secondes

}

    if(image3){
    setInterval(function() {
        setTimeout(moveImage3, 1000); // Relancer le mouvement après un petit délai
    }, 30); // Recommence tous les 10 secondes
}




    //défilé video youtube
    let currentIndex = 0;
    const slides = document.querySelectorAll('.video-slide');
    const dots = document.querySelectorAll('.dot');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let iframe;
    // Fonction pour afficher la vidéo active
    function showSlide(index) {
      // Gérer l'index pour boucler entre les vidéos
      if (index >= slides.length) {
        currentIndex = 0;
      } else if (index < 0) {
        currentIndex = slides.length - 1;
      } else {
        currentIndex = index;
      }
    
      // Masquer toutes les vidéos et désactiver tous les cercles
      slides.forEach(slide => { 
       /* const iframet = slide.querySelector('iframe');
          const player = new YT.Player(iframet);
          player.stopVideo(); // Stop the video if using YouTube API
        */
        //  slide.querySelector('iframe').src=temp;

        let youtubePlayer=slide.querySelector('iframe');
        if (youtubePlayer) {
            // Attempt to send a command to the player to stop the playing of the video.
            youtubePlayer.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
          }

        slide.classList.remove('active')});
      dots.forEach(dot => dot.classList.remove('active'));

   
    
      // Afficher la vidéo active
      slides[currentIndex].classList.add('active');
      iframe = slides[currentIndex].querySelector('iframe'); // pour la fonction getvideo

      dots[currentIndex].classList.add('active');
    }
    
    // Navigation avec la flèche précédente
    prevButton.addEventListener('click', () => {
      showSlide(currentIndex - 1);
    });
    
    // Navigation avec la flèche suivante
    nextButton.addEventListener('click', () => {
      showSlide(currentIndex + 1);
    });
    
    // Navigation avec les cercles
    dots.forEach((dot, index) => {
      dot.addEventListener('mouseover', () => {
        showSlide(index);
      });
    });
    
    // Afficher la première vidéo au départ
    showSlide(currentIndex);
    
    // Événements tactiles pour les appareils mobiles (swipe)
    let touchstartX = 0;
    let touchendX = 0;
    
    document.body.addEventListener('touchstart', e => {
      touchstartX = e.changedTouches[0].screenX;
    }, false);
    
    document.body.addEventListener('touchend', e => {
      touchendX = e.changedTouches[0].screenX;
      handleSwipe();
    }, false);
    
    function handleSwipe() {
      if (touchendX < touchstartX) {
        showSlide(currentIndex + 1);  // Swipe à gauche : vidéo suivante
      }
      if (touchendX > touchstartX) {
        showSlide(currentIndex - 1);  // Swipe à droite : vidéo précédente
      }
    }


     // let zonetest= document.getElementById('zonetest');
    function getActiveSrc() {
        // Sélectionner la slide active
       // let activeSlide = document.querySelector('.video.slide.active');
        
        // Sélectionner l'iframe dans cette slide active
        //let iframe = activeSlide.querySelector('iframe');
        
        // Récupérer le lien (src) de l'iframe
        let iframeSrc = iframe ? iframe.src : 'Pas d\'iframe trouvée dans la slide active';
       // zonetest.innerHTML=iframeSrc;

        const formData = new FormData();
        formData.append('lienyt', iframeSrc);  // Ajouter la valeur 'pseudo' à FormData
        // Utiliser fetch pour envoyer la requête POST à receive.php
        fetch(window.location.href, {
            method: 'POST',
            body: formData
        })
    
        .then(response => response.text())  // Traiter la réponse du serveur
        .then(data => {
            // Afficher la réponse dans la page
            console.log("fetch addtomylist");
         document.getElementById('getvideo').innerHTML = "added";
        })
        .catch(error => console.error('Erreur:', error));  // Gérer les erreurs
    }
/*
    getvideosrc=getElementById('getvideo');
    getvideosrc.addEventListener('click',getActiveSrc);
    */

    function getActiveSrc(option) {
        // Sélectionner la slide active
       // let activeSlide = document.querySelector('.video.slide.active');
        
        // Sélectionner l'iframe dans cette slide active
        //let iframe = activeSlide.querySelector('iframe');
        
        // Récupérer le lien (src) de l'iframe
        let iframeSrc = iframe ? iframe.src : 'Pas d\'iframe trouvée dans la slide active';
       // zonetest.innerHTML=iframeSrc;

        const formData = new FormData();
        formData.append('lienyt', iframeSrc);  // Ajouter la valeur 'pseudo' à FormData
        // Utiliser fetch pour envoyer la requête POST à receive.php
        fetch(window.location.href, {
            method: 'POST',
            body: formData
        })
    
        .then(response => response.text())  // Traiter la réponse du serveur
        .then(data => {
            // Afficher la réponse dans la page
          //  document.getElementById('getvideo').innerText = "added";
        })
        .catch(error => console.error('Erreur:', error));  // Gérer les erreurs

        if(option==='delete'){iframe.removeAttribute('src');showSlide(currentIndex+1)}
    }

    function getVideoSrcA() {
        let iframe = document.querySelector('.video-slide.active iframe');
        
        let iframeSrc ="https://www.youtube.com/embed/95MvBFuz6KI?si=pqwilmYbM0IZAZO3";  // Récupérer la source de l'iframe

        //let iframeSrc = iframe.src;  // Récupérer la source de l'iframe
        console.log(iframeSrc);
    
        // Utilisation de fetch
        fetch('videos.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'lienyt=' + encodeURIComponent(iframeSrc),
        })
        .then(response => response.json())
        .then(data => {
            console.log("reponse");
            //console.log('Réponse du serveur:', data.status);
            changebuttonstyle(data.status);
        })

    }
    
    function getVideoSrcC() {
        // Sélectionner le premier iframe dans la slide active (si possible)
        let iframe = document.querySelector('.video-slide.active iframe');
        
        console.log(iframeSrc);

        $.ajax({
            url: 'videos.php',  // Le fichier PHP qui traite la requête
            type: 'POST',  // Utilisation de POST pour envoyer des données
            data: { lienyt: iframeSrc },  // La variable à envoyer
            dataType: 'json',  // On spécifie que la réponse est en JSON
            success: function(response) {
                // Traitement de la réponse du serveur
                console.log("post suceed");
                console.log('Réponse du serveur:', response);
            },
     
        });
    }

    function getVideoSrcB() {
        // Sélectionner le premier iframe dans la slide active (si possible)
        let iframe = document.querySelector('.video-slide.active iframe');
        
        if (!iframe) {
            console.log('Pas d\'iframe trouvée dans la slide active');
            return;
        }
        
        let iframeSrc = iframe.src;  // Récupérer la source de l'iframe
        console.log(iframeSrc);

        // Créer la requête AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'videos.php', true);  // Envoyer la requête à videos.php
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
        // Envoi des données POST avec un paramètre nommé 'lienyt'
        xhr.send('lienyt=' + encodeURIComponent(iframeSrc));
    
        // Lorsque la réponse est prête, manipuler le DOM
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
               var response = xhr.responseText;  // Réponse reçue du serveur
                console.log("reponse ok");
               console.log(response);
                changebuttonstyle("same");  // Mettre à jour le bouton avec la réponse
            }
        };
    }
/*
    getvideosrc=getElementById('getvideo');
    getvideosrc.addEventListener('click',getActiveSrc);
    */
    