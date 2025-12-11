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









let iframe;
let currentIndex = 0;
    let slides = document.querySelectorAll(".video-slide");

function initializeCarouselNavigation() {
    slides = document.querySelectorAll(".video-slide");
    const dots = document.querySelectorAll(".dot");
    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");

    

    // Fonction pour afficher la vidéo active
    function showSlide(index) {
        if (index >= slides.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = slides.length - 1;
        } else {
            currentIndex = index;
        }

        // Masquer toutes les vidéos et désactiver tous les cercles
        slides.forEach(slide => slide.classList.remove("active"));
        dots.forEach(dot => dot.classList.remove("active"));

        // Afficher la vidéo active
        slides[currentIndex].classList.add("active");
        iframe = slides[currentIndex].querySelector("iframe");

        dots[currentIndex].classList.add("active");
    }

    // Navigation avec la flèche précédente
    prevButton.addEventListener("click", () => {
        showSlide(currentIndex - 1);
    });

    // Navigation avec la flèche suivante
    nextButton.addEventListener("click", () => {
        showSlide(currentIndex + 1);
    });

    // Navigation avec les cercles
    dots.forEach((dot, index) => {
        dot.addEventListener("mouseover", () => {
            showSlide(index);
        });
    });

    // Afficher la première vidéo au départ
    showSlide(currentIndex);

    // Événements tactiles pour les appareils mobiles (swipe)
    let touchstartX = 0;
    let touchendX = 0;

    document.body.addEventListener("touchstart", e => {
        touchstartX = e.changedTouches[0].screenX;
    }, false);

    document.body.addEventListener("touchend", e => {
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
}




document.addEventListener("DOMContentLoaded", function() {
 /*   let vid = ["https://www.youtube.com/embed/nuW6EpxjPCs", "https://www.youtube.com/embed/nuW6EpxjPCs"];
    console.log("button ok");

    // Appeler la fonction pour créer les slides vidéo
    createslides(vid);*/

    // Initialiser la navigation du carrousel
    initializeCarouselNavigation();
});

function createslides(videos) {
    const carouselSlides = document.getElementById("video-container-slide");
    const carouselDots = document.querySelector(".dots");

    // Ajouter les slides vidéo dynamiquement
    videos.forEach((video, index) => {
        // Créer la slide pour la vidéo
        const slide = document.createElement("div");
        slide.classList.add("video-slide");
        slide.innerHTML = `<iframe width="100%" height="315" src="${video}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        carouselSlides.appendChild(slide);

        // Créer un dot pour chaque vidéo
        const dot = document.createElement("div");
        dot.classList.add("dot");
        dot.setAttribute("data-slide", index);
        carouselDots.appendChild(dot);
    });
}

   

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
    
    let page="addVideo.php";
    if(option=='delete')page="deleteVideo.php";
    // Utiliser fetch pour envoyer la requête POST à receive.php
    fetch(page, {
        method: 'POST',
        body: formData
    })

    .then(response => response.text())  // Traiter la réponse du serveur
    .then(result => {
        // Afficher la réponse dans la page
            result = result.trim();  
        console.log("fetch result : "+result);
        if(result ==="insert"){
                console.log("fetch addtomylist");
                document.getElementById('getvideo').innerText = "Video Added";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #88ff00ff, #3cff00ff);";

                setTimeout(() => {        
                document.getElementById('getvideo').innerText = "Add to Mylist";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #ffe7b3, #ffdb38);";
            
                }, 500);
            }
                    else if(result ==="exist"){
                    console.log("fetch addtomylist exist");
            document.getElementById('getvideo').innerText = "Video already on list";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #44cce4ff, #5f02ffff);";

                setTimeout(() => {        
                document.getElementById('getvideo').innerText = "Add to Mylist";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #ffe7b3, #ffdb38);";
            
                }, 500); }
                else if(result ==="listFull"){
                    console.log("fetch addtomylist exist");
            document.getElementById('getvideo').innerText = "list full";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #44cce4ff, #5f02ffff);";

                setTimeout(() => {        
                document.getElementById('getvideo').innerText = "Add to Mylist";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #ffe7b3, #ffdb38);";
            
                }, 500); }
               // if(result ==="delete")
                    else{
                    console.log("fetch delete");
            document.getElementById('getvideo').innerText = "Deleted";
                document.getElementById('getvideo').style = "background: linear-gradient(to right, #973a3aff, #5f02ffff);";

                setTimeout(() => {        
                //document.getElementById('getvideo').innerText = "delete Video";
                //document.getElementById('getvideo').style = "background: linear-gradient(to right, #ffe7b3, #ffdb38);";
                location.reload();
            
                }, 500);

            }


    })
    .catch(error => console.error('Erreur:', error));  // Gérer les erreurs

    if(option==='delete'){
        iframe.remove();   
        const activeDot = document.querySelector('.dot.active');
const activeSlide = document.querySelector('.slide.active');
slides[currentIndex].remove();
        if (activeSlide) activeSlide.remove();
        if (activeDot) {
           activeDot.remove();  // Retirer le dot actif du DOM
           //carousel.goTo(1);        
           }
        slides = document.querySelectorAll(".video-slide");
    showSlide(currentIndex);


 }
}


//admin mode url table
function tableUrlDisplay(table){
    console.log('display tableUrl');
    let tableUrl="";
    tableHtml=document.querySelector('.tableUrl')

for (let i=0;i<10;i++){
    if(table[i]){
        tableUrl+=`<li> <input type="text" class="inputUrl" value="${table[i]}"> </li>
        `;}
    else{
        tableUrl+=`<li> <input type="text" class="inputUrl" value=""> </li>
        `;}

    }

    /*
    table.forEach(element => {
        tableUrl+='<li>Url '+ i +' : '+element+'</li>';
        console.log(element);
        i++;
    });
    */
    tableHtml.innerHTML+=tableUrl;
    console.log(tableUrl)
}

function tableUrlBotDisplay(table){
    console.log('display tableUrlBot');
    let tableUrl="";
    tableHtml=document.querySelector('.tableUrlBot')

for (let i=0;i<4;i++){
    if(table[i]){
        tableUrl+=`<li> <input type="text" class="inputUrlBot" value="${table[i]}"> </li>
        `;}
    else{
        tableUrl+=`<li> <input type="text" class="inputUrlBot" value=""> </li>
        `;}

    }

    /*
    table.forEach(element => {
        tableUrl+='<li>Url '+ i +' : '+element+'</li>';
        console.log(element);
        i++;
    });
    */
    tableHtml.innerHTML+=tableUrl;
    console.log(tableUrl)
}



 function getUrl(cat) {
        // Sélectionner le premier iframe dans la slide active (si possible)
    // Sélectionner tous les inputs avec la classe .inputUrl
    let tableUrl =  [];
    const inputUrl=document.querySelectorAll('.inputUrl');

    inputUrl.forEach(element => {
        tableUrl.push(element.value);
    });
        console.log(tableUrl);
        console.log(JSON.stringify(tableUrl));
    // Préparer les données à envoyer
    const formData = new FormData();
    formData.append('urls', JSON.stringify(tableUrl));
    let urlFetch= "videoListAdmin.php?cat="+cat;
    console.log(urlFetch);

    fetch(urlFetch, {
            method: 'POST',
            body: formData
        })
    .then(response => response.text())  // Traiter la réponse du serveur
    .then(data => {
       //window.location.reload();

    })
    .catch(error => console.error('Erreur:', error));  // Gérer les erreurs

    }




function getUrlBot(cat) {
        // Sélectionner le premier iframe dans la slide active (si possible)
    // Sélectionner tous les inputs avec la classe .inputUrl
    let tableUrl =  [];
    const inputUrl=document.querySelectorAll('.inputUrlBot');

    inputUrl.forEach(element => {
        tableUrl.push(element.value);
    });
        console.log(tableUrl);
        console.log(JSON.stringify(tableUrl));
    // Préparer les données à envoyer
    const formData = new FormData();
    formData.append('urls', JSON.stringify(tableUrl));
    let urlFetch= "videoListAdmin.php?cat="+cat;
    console.log(urlFetch);

    fetch(urlFetch, {
            method: 'POST',
            body: formData
        })
    .then(response => response.text())  // Traiter la réponse du serveur
    .then(data => {
       window.location.reload();

    })
    .catch(error => console.error('Erreur:', error));  // Gérer les erreurs

    }









    