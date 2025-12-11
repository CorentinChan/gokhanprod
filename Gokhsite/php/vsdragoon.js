let positiongx2 =400;
let positiongy2 =200;
let bouclier=5;
let imgDefile=false;
let bigBallDelay=0;
let bigBallDelaySet=20;
let BotballSpeed=1000;
let clones = []; 
let clones2 = []; 
let score=0;

let cloneDelay = true;


document.getElementById('scorebutton').addEventListener('click', function() {
    console.log("buuton appuyé");
    addScorePHP();  // Appeler la fonction addScorePHP lors du clic
});


function addScorePHP() {
console.log("addscorepphp");
    // Créer un objet FormData pour envoyer les données en POST
    const formData = new FormData();
    formData.append('score', score);  // Ajouter la valeur 'pseudo' à FormData
    formData.append('maxlevel', maxlevel);  // Ajouter la valeur 'pseudo' à FormData
    // Utiliser fetch pour envoyer la requête POST à receive.php
    fetch('vsdragoon.php', {
        method: 'POST',
        body: formData
    })

    .then(response => response.text())  // Traiter la réponse du serveur
    .then(data => {
        // Afficher la réponse dans la page
        document.getElementById('response').innerText = data;
    })
    .catch(error => console.error('Erreur:', error));  // Gérer les erreurs
}


let imagePierre2 = document.getElementById('Pierre2');
let imagePierreb = document.getElementById('Pierre3');
let imagePierre2b = document.getElementById('Pierre4');

let posxPierre = 1500; let posyPierre = 400;
let posxPierre2 = 1000; let posyPierre2 = 100;
let posxPierreb = 1500; let posyPierreb = 200;
let posxPierre2b = 800; let posyPierre2b = 100;

let imageDragon2 = document.getElementById('dragonBot');
let posyDragon2 = 100;
let imageDragon = document.getElementById('dragon');
let posxDragon=200; let posyDragon = 300;
imageDragon.style.left=posxDragon+"px";
let dragonHP=0; let dragon2HP=0; 

let imageDefilante = document.getElementById("imageDef");

let imageBoule = document.getElementById('bouleFeu');
let posxBoule=0; let posyBoule =0;
if(imageDragon.complete)console.log("boule de euf ok");



let currentRotation=0;
let modeSport =false;
let speed=1;
let enchute=false;
let imageg2 = document.getElementById("PersoDrone");//imageg drone

imageg2.style.left = positiongx2 + "px"; 
 imageg2.style.top = positiongy2 + "px"; 

let nbTraversee=0;
let zonescore=document.querySelector('.zoneScore');
let levelGame=0;let maxlevel=0;


let posxDef = -150;
let posyDef = posyDragon;
let started = false;



function startGame() {
        
    if(dragon2HP<1&&levelGame!=-3) { 
         switch(levelGame){ 
             case 0 : dragon2HP=300;dragonHP=100;bigBallDelaySet=20;BotballSpeed=1000; break;  
             case 1 : dragon2HP=500;dragonHP=100;bigBallDelaySet=15;BotballSpeed=1000;break;  
             case 2 : dragon2HP=500;dragonHP=100;bigBallDelaySet=6;BotballSpeed=1000;break; 
             case 3 : dragon2HP=500;dragonHP=100;bigBallDelaySet=5;BotballSpeed=700;break; 
             case 4 : dragon2HP=500;dragonHP=100;bigBallDelaySet=3;BotballSpeed=500;break; 
             case 5 : dragon2HP=800;dragonHP=100;bigBallDelaySet=1;BotballSpeed=10;break; 
         }
       
         imageDragon.style.display="block"; imageDragon2.style.display="block";
         levelGame++;
         maxlevel=levelGame;
         started=true;
         addScorePHP();

        
    }
 
}


document.addEventListener("DOMContentLoaded", function() {
    let imageg = document.getElementById("Perso"); //imageg aigle

    let positiongx = 100;
let positiongy =100;
imageg.style.left = positiongx + "px"; 
 imageg.style.top = positiongy + "px"; 

let audio = new Audio("https://cdn.pixabay.com/download/audio/2022/06/08/audio_3fb279d9fb.mp3?filename=eagle-scream-112940.mp3");
let keysPressed = {};

   
    document.addEventListener("DOMContentLoaded", function() {
        document.body.style.width = window.innerWidth + "px";
        document.body.style.height = window.innerHeight + "px";
        document.body.style.overflow = "hidden"; // Empêche le défilement
    });

    if (!imageg) {
        console.error("L'imageg #Perso n'a pas été trouvée !");
        return;
    }
    if (!imageg2) {
        console.error("L'imageg2 #Perso n'a pas été trouvée !");
        return;
    }
let choixAide="eagle";
imageg.style.display="block";
imageDefilante.style.display="block";
imageg2.style.display="none";

    document.getElementById("choixAigle").addEventListener('click', function() {
        if (this.checked) {  // "this" fait référence à l'élément sur lequel l'événement a été déclenché
            imageg.style.display="block";
            imageDefilante.style.display="block";
            imageg2.style.display="none";
            choixAide="eagle";
        }
     
    });

    document.getElementById("choixDrone").addEventListener('click', function() {
        if (this.checked) 
        {
            imageg.style.display="none";
            imageDefilante.style.display="none";
            imageg2.style.display="block";
            choixAide="drone";
        }
    });
/*
    function collisionBot( posx, posy){
        if (posx===positiongx2 && posy===positiongy2)  
            {   positiongx2 = 500; positiongy2 =400;
                imageg2.style.left = positiongx2 + "px"; 
                imageg2.style.top = positiongy2 + "px"; 
            }
         /*
                if (positiongx===posx && positiongy===posy)  
                    {        positiongx=0; positiongy=400;
                        imageg.style.left = positiongx + "px"; 
                        imageg.style.top = positiongy + "px"; 
                    }
                    if (posx===positiongx2 && posy===positiongy2)  
                        {   positiongx2 = 500; positiongy2 =400;
                            imageg2.style.left = positiongx2 + "px"; 
                            imageg2.style.top = positiongy2 + "px"; 
                        }
                     
                            if (positiongx===posx && positiongy===posy)  
                                {        positiongx=0; positiongy=400;
                                    imageg.style.left = positiongx + "px"; 
                                    imageg.style.top = positiongy + "px"; 
                                }
    }*/

                                function checkCollision2(image,clonestab) {
                                    const rect1 = image.getBoundingClientRect();
                                    let collision=false;
                                    
                                    // Compare cette image avec toutes les autres images clonées
                                    for (let i = 0; i < clonestab.length; i++) {
                                        const otherImage = clonestab[i];
                                        if (otherImage === image) continue; // Ignore la comparaison avec l'image elle-même
                                        
                                        const rect2 = otherImage.getBoundingClientRect(); // Récupère les coordonnées et la taille de l'autre image
                                
                                        // Vérifie si les deux images se chevauchent
                                        if (rect1.left < rect2.left + rect2.width &&
                                            rect1.left + rect1.width > rect2.left &&
                                            rect1.top < rect2.top + rect2.height &&
                                            rect1.top + rect1.height > rect2.top) {
                                   collision=true;console.log("collision dragon");
                                            
                                            return collision; 
                                        }
                                   
                                    }
                                }          
           
                                intervalBotBallSpeed = setInterval(function() {
                                const clonedImage = cloneImage("dragon2"); 
                                moveLeftClone(clonedImage); 
                                bigBallDelay++;
                                }, 1000);
                                                               
function moveLeftClone(image) {
    let posxf = parseInt(image.style.left); // Récupère la position actuelle (en pixels)
    let interval = setInterval(function() {

           if( image.style.transform==='scale(0.5)'){
                if (posxf>innerWidth-100)
                {
                  //  imageBoule.style.display="none"
                    posxf = 0;
                    image.remove();
                }
                else
                {
                    posxf+=10;
                    image.style.left= posxf + "px";
                }
        
           }
        
           if( image.style.transform==='scale(-0.5)'||image.style.transform==='scale(-1)'||image.style.transform==='scale(-3)'){
                 if (posxf<20)
                    {
                        image.style.display="none"
                        image.remove();

                    }
                    else
                    {
                        posxf-=10;
                        image.style.left= posxf + "px";
                    }
                    //checkCollision(image); // Vérifie si l'image entre en collision avec un autre clone

                }
        


    }, 20); // Définit la vitesse du mouvement (ici, chaque 20 ms)

}

function checkCollision(image,type) {
    const rect1 = image.getBoundingClientRect();
    
    // Compare cette image avec toutes les autres images clonées
    for (let i = 0; i < clones2.length; i++) {
        const otherImage = clones2[i]; 
        if (otherImage === image) continue; // Ignore la comparaison avec l'image elle-même
        
        const rect2 = otherImage.getBoundingClientRect(); // Récupère les coordonnées et la taille de l'autre image

        // Vérifie si les deux images se chevauchent
        if (rect1.left < rect2.left + rect2.width &&
            rect1.left + rect1.width > rect2.left &&
            rect1.top < rect2.top + rect2.height &&
            rect1.top + rect1.height > rect2.top) {
            console.log('Collision détectée entre deux images!');
            if (type==="imageg"){                   
                positiongx=400; positiongy=200;
              imageg.style.left= positiongx + "px";
              imageg.style.top= positiongy+"px";
              imageg.style.transform=`rotate(${currentRotation}deg)`;
              }
              if (type==="imageg2"){                   
                //positiongx2=200; positiongy2=200;
                bouclier -=1;
                if(bouclier<1) 
                    {
                     positiongx2=200; positiongy2=Math.floor(Math.random()*10)*100;
                     bouclier=5;
                    }    
              imageg2.style.left= positiongx2 + "px";
              imageg2.style.top= positiongy2+"px";
              currentRotation+=360;
              imageg2.style.transform = `rotate(${currentRotation}deg)`; 
                otherImage.remove();
              }
            
            return; 
        }
   
    }
}

function checkCollisionB(image,type) {
    const rect1 = image.getBoundingClientRect();
    
    // Compare cette image avec toutes les autres images clonées
    for (let i = 0; i < clones.length; i++) {
        const otherImage = clones[i]; 
        if (otherImage === image) continue; // Ignore la comparaison avec l'image elle-même
        
        const rect2 = otherImage.getBoundingClientRect(); // Récupère les coordonnées et la taille de l'autre image

        // Vérifie si les deux images se chevauchent
        if (rect1.left < rect2.left + rect2.width &&
            rect1.left + rect1.width > rect2.left &&
            rect1.top < rect2.top + rect2.height &&
            rect1.top + rect1.height > rect2.top) {
            console.log('Collision détectée entre deux images!');
            if (type==="imageg"){                   
                positiongx=400; positiongy=200;
              imageg.style.left= positiongx + "px";
              imageg.style.top= positiongy+"px";
              imageg.style.transform=`rotate(${currentRotation}deg)`;
              }
              if (type==="imageg2"){  
                bouclier-=1;
                if(bouclier<1) 
                    {
                     positiongx2=200; positiongy2=200;
                     bouclier=15;
                    }    

              imageg2.style.left= positiongx2 + "px";
              imageg2.style.top= positiongy2+"px";
              currentRotation+=360;
              imageg2.style.transform = `rotate(${currentRotation}deg)`; 
                otherImage.remove();
              }
            
            return; 
        }
   
    }
}

    function cloneImage(type) {
        // Récupère l'image originale
        const originalImage = document.getElementById('imgTest');
        
        // Crée une copie de l'image
        const clonedImage = originalImage.cloneNode(true);
        clonedImage.classList.add('cloneImage'); // Ajoute une classe CSS pour le style
        clonedImage.style.display =  "block";

        // Récupère une position aléatoire pour le clone
        if(type==="dragon") {
            clones.push(clonedImage);
        clonedImage.style.left =  (posxDragon-0) + 'px';
        clonedImage.style.top = (posyDragon-20) + 'px';
if(imageDragon.style.transform==='scaleX(1)') {clonedImage.style.transform='scale(0.5)';         clonedImage.style.left =  (posxDragon-0) + 'px';}

else {clonedImage.style.transform='scale(-0.5)';        clonedImage.style.top = (posyDragon-20) + 'px';}

        }

        if(type==="dragon2") {
            clonedImage.style.transform='scale(-1)';  
            if(bigBallDelay>bigBallDelaySet){clonedImage.style.transform='scale(-3)';  bigBallDelay=0;}
           // clonedImage.style.height= "300px";
            clones2.push(clonedImage);
            clonedImage.style.left =  "1350" + 'px';
        clonedImage.style.top = (posyDragon2) + 'px';
        }

        // Ajoute l'image clonée à l'élément body (ou à un autre conteneur)
        document.body.appendChild(clonedImage);

        // Ajoute le clone à la liste des clones

        return clonedImage;
    }

     //Déplacement avec un clic (optionnel)
    document.addEventListener("click", function() {
     console.log("clic");
    });



    function resetImageDef(){
posxDef=-150;
        imageDefilante.style.left=posxDef+"px";
    }
    let delayEagle=20000;
    setInterval(function() {
        resetImageDef();
    }, delayEagle);
            
        setInterval(function() {

            
            if(dragonHP<25)delayEagle=10000;
            if(dragonHP<10)delayEagle=5000;
        checkCollision(imageg,"eagle");
        checkCollision(imageg,"Pierre")
        collisionBot(imageDragon.left,imageDragon.top,"dragon");
        collisionBot(imageDragon2.left,posyDragon2,"dragon2");

        moveImageDefTop() ;

        setTimeout(moveDragon2, 200); // Relancer le mouvement après un petit délai

        if(checkCollision2(imageDragon,clones2)===true){dragonHP--;if(started)score--;}
        if(checkCollision2(imageDragon2,clones)===true){dragon2HP--;if(started)score+=5;}

        if(levelGame!=-3)zonescore.innerHTML="level" + levelGame + "| HP dragon 1 :" +dragonHP +"| HP dragon 2 : "+dragon2HP + "| score : " + score;
 
        if(dragon2HP<1&&levelGame!=-3){
           if(levelGame===0) zonescore.innerHTML="click on button to start the game ";
            else {imageDragon2.style.display="none";zonescore.innerHTML="YOU WIN, start next level ";}
        if(levelGame>5)zonescore.innerHTML="You finish the game, congratulation bg! ";
        started=false;
        }
        if(dragonHP<=0&&dragon2HP>0){imageDragon.style.display="none";zonescore.innerHTML="GAME OVER";
            levelGame=-3;
            if(started)addScorePHP();
            started=false;}

        

        checkCollision(imageg,"imageg");        checkCollision(imageg2,"imageg2");
        checkCollisionB(imageg,"imageg");        checkCollisionB(imageg2,"imageg2");

        moveBoule()
    }, 50);



    setInterval(function() {
        if(imgDefile&&choixAide==="eagle")moveImageDefLeft() ;
       // setTimeout(resetImageDef, 8000); // Relancer le mouvement après un petit délai
    }, 50);

    const clonedImage = cloneImage("dragon2"); 

    function chute(eagle,drone){
      moveDown();
      moveDown2();

      if (positiony < window.innerHeight -50 && positiony2 < window.innerHeight -50)
        {
        positiongx=0; positiongy=200;positiongx2 = 500; positiongy2 =200;
        imageg.style.left = positiongx + "px"; 
        imageg.style.top = positiongy + "px"; 
        imageg2.style.left = positiongx2 + "px"; 
        imageg2.style.top = positiongy2 + "px"; 
        clearTimeout(IntervalChute);
        enchute = false;
  
        }
        else     {  
          enchute=true;
        }


    }   

    function collisionPerso(){
        let tolerx=30;
        let tolery=15;
        console.log("collision perso");
        if (positiongx+tolerx>positiongx2-tolerx && positiongx-tolerx<positiongx2+tolerx && positiongy+tolery>positiongy2-tolery&&positiongy-tolery<positiongy2+tolery)  
            {      
               /* chute(true,true);
                console.log("collision perso");
                let IntervalChute = setInterval(chute, 30);
                enchute=true;
                imageg.style.transform="rotate(180deg)";
                imageg2.style.transform = "rotate(180deg)";
*/
                positiongx=200; positiongy=2000;positiongx2 = 400; positiongy2 =200;
                imageg.style.left = positiongx + "px"; 
                imageg.style.top = positiongy + "px"; 
                imageg2.style.left = positiongx2 + "px"; 
                imageg2.style.top = positiongy2 + "px"; 

                currentRotation+=360;
                imageg.style.transform=`rotate(${currentRotation}deg)`;
                imageg2.style.transform = `rotate(${currentRotation}deg)`; // Applique la rotation à l'image

            }
/*
            if (positiongx===positiongx2 && positiongy===positiongy2)  
                {        positiongx=0; positiongy=400;positiongx2 = 500; positiongy2 =400;
                    imageg.style.left = positiongx + "px"; 
                    imageg.style.top = positiongy + "px"; 
                    imageg2.style.left = positiongx2 + "px"; 
                    imageg2.style.top = positiongy2 + "px"; 
                }
*/
    }


    function collisionBot(posx,posy){
       
       
        let tolerx=30;
        let tolerx2=10;
        let tolery=20;
        
        console.log("colosionbot");
        if (posx+tolerx>positiongx2-tolerx && posx-tolerx-tolerx2<positiongx2+tolerx &&  posy+tolery>positiongy2-tolery&& posy-tolery<positiongy2+tolery)  
            {      
            
                positiongx2 = 200; positiongy2 =200;
            

                currentRotation+=360;
                imageg2.style.transform = `rotate(${currentRotation}deg)`; // Applique la rotation à l'image

            }

            if (positiongx+tolerx-10>posx-tolerx+10 && positiongx-tolerx+10<posx+tolerx-10 && positiongy+tolery>posy-tolery&& positiongy-tolery<posy+tolery)  
                {      
                   
                    
                    positiongx=400; positiongy=200;
                    
    
                    currentRotation+=360;
                    imageg.style.transform=`rotate(${currentRotation}deg)`;
    
                }

                imageg.style.left = positiongx + "px"; 
                    imageg.style.top = positiongy + "px"; 
                    imageg2.style.left = positiongx2 + "px"; 
                    imageg2.style.top = positiongy2 + "px"; 

    }

    function collisionBot(posx,posy,type){
       
       
        let tolerx=30;
        let tolerx2=10;
        let tolery=20;
        console.log(type);


        
        if ( type==="boule") {posy+=30;}


            if (positiongx+tolerx-10>posx-tolerx+10 && positiongx-tolerx+10<posx+tolerx-10 && positiongy+tolery>posy-tolery&& positiongy-tolery<posy+tolery)  
                {      
                   
                    if(type==="dragon")dragonHP-=10;
                    if(type==="dragon2")dragon2HP-=20;


                    positiongx=0; positiongy=400;
                    
    
                    currentRotation+=360;
                    imageg.style.transform=`rotate(${currentRotation}deg)`;
                    positiongx2 = 20; positiongy2 =200;
                    
        
                    currentRotation+=360;
                    imageg.style.transform = `rotate(${currentRotation}deg)`; // Applique la rotation à l'image
    
                }

                if (posx+tolerx>positiongx2-tolerx && posx-tolerx-tolerx2<positiongx2+tolerx &&  posy+tolery>positiongy2-tolery&& posy-tolery<positiongy2+tolery)  
                    {      
                    
                        positiongx2 = 500; positiongy2 =400;
                    
        
                        currentRotation+=360;
                        imageg2.style.transform = `rotate(${currentRotation}deg)`; // Applique la rotation à l'image
        
                    }
                imageg.style.left = positiongx + "px"; 
                    imageg.style.top = positiongy + "px"; 
                    imageg2.style.left = positiongx2 + "px"; 
                    imageg2.style.top = positiongy2 + "px"; 

    }
    

    function moveUpD() {
        if ( posyDragon> 100) {
            posyDragon -= 10; // Déplacement de 50px
            imageDragon.style.top = posyDragon + "px"; 
        
        }
    }
    
    function moveLeftD() {
        if (posxDragon > 20 ) {
            posxDragon -= 10; 
            imageDragon.style.left = posxDragon + "px"; 
        }
      
    }
    
    function moveRightD() {
        if (posxDragon < window.innerWidth -200 ) {
            posxDragon += 10; 
            imageDragon.style.left= posxDragon + "px"; 
           
        }
    }


    document.addEventListener("keydown", function(event) {
        keysPressed[event.key] = true;


        if (keysPressed['p']||keysPressed['P']) imgDefile=true;

        if(enchute===false){

                if (keysPressed['d']||keysPressed['D']) { 
                    moveRight();
                }
                if (keysPressed['s']||keysPressed['S']) { 
                    moveDown();
                }

                if (keysPressed['z']||keysPressed['Z']) { 
                    moveUp();
                }
                collisionPerso();    
       

    }
        });
    document.addEventListener("keydown", function(event) {
        keysPressed[event.key] = true;

        if(enchute===false){

                    if (keysPressed['h']||keysPressed['H']) { 
                        moveRight2();
                    }
                    if (keysPressed['f']||keysPressed['F']) { 
                        moveLeft2();
                    }
                    if (keysPressed['g']||keysPressed['G']) { 
                        moveDown2();
                    }

                    if (keysPressed['t']||keysPressed['T']) { 
                        moveUp2();
                    }
                    if (keysPressed['y']||keysPressed['Y']) { 
                        modeSport=true;
                        speed=3;
                    }
                    if (keysPressed['r']||keysPressed['R']) { 
                    modeSport=false;speed=1;
                    }
        collisionPerso();


                }
    });


    document.addEventListener("keydown", function(event) {
        keysPressed[event.key] = true;


                    if (keysPressed['z']||keysPressed['Z']) { 

                     moveUpD();
                    }
                    if (keysPressed['q']||keysPressed['Q']) { 
                        moveLeftD();
                        imageDragon.style.transform='scaleX(-1)';  

                    }
                    if (keysPressed['s']||keysPressed['S']) { 
                        moveDownD();
                    }

                    if (keysPressed['d']||keysPressed['D']) { 
                        imageDragon.style.transform='scaleX(1)';  
                        moveRightD();}
                    if ((keysPressed['m']||keysPressed['M'])&&cloneDelay) { 
                        if(started)score--;
                        const clonedImage = cloneImage("dragon"); 
                        moveLeftClone(clonedImage); 
                        cloneDelay = false;
                        
                    }


        collisionPerso();
 
                
    });



    document.addEventListener('keyup', function(event) {
        collisionPerso();

        cloneDelay=true;
        keysPressed[event.key] = false;  // Met la touche en "relâchée"
       // imgDefile=false;

      /*  if (keysPressed['d']||keysPressed['D']) { 
            moveRight();
        }
        if (keysPressed['s']||keysPressed['S']) { 
            moveDown();
        }

        if (keysPressed['z']||keysPressed['Z']) { 
            moveUp();
        }*/
      });
            
/*
         if (event.key === "d" || event.key === "D") { 
            moveRight();
        }
        if (event.key === "s" || event.key === "S") { 
            moveDown();
        }

        if (event.key === "z" || event.key === "Z") { 
            moveUp();
        }
            
        if (keysPressed['z'] && keysPressed['d']) {
            console.log('Les touches Z et S sont pressées en même temps');
            moveUp();            
            moveRight();

          }
          if (keysPressed['s'] && keysPressed['d']) {
            console.log('Les touches D et S sont pressées en même temps');
            moveDown();
            moveRight();
          }
        /*
        if (event.key === "q" || event.key === "Q") { 
            moveLeft();
        }
            */
      
    function moveRight() {
        if (positiongx > window.innerWidth - 200) {
            positiongx = 0;
            audio.play().catch(error => console.log("Lecture bloquée :", error));
            nbTraversee++;
            zonescore.innerHTML= nbTraversee;

        }
        positiongx += 10; // Déplacement de 50px
        imageg.style.left = positiongx + "px"; 
        
    }

    function moveDown() {
        if (positiongy > window.innerHeight - 100) {
            positiongy = 400;}
        positiongy += 10; // Déplacement de 50px
        imageg.style.top = positiongy + "px"; 
    }

    function moveUp() {
        if ( positiongy < 100) {
            positiongy = 400;}
        positiongy -= 10; // Déplacement de 50px
        imageg.style.top = positiongy + "px"; 
        
    }
/*
    function moveLeft() {
        if (positiongy > window.innerHeight - 200) {
            positiongx = 0;}
        positiongx -= 10; // Déplacement de 50px
        imageg.style.top = positiongy + "px"; 
        console.log("movedown");
    
    }

    */
        });



        function moveDown2() {
            if (positiongy2 < window.innerHeight - 100) {
              
            positiongy2 += 10*speed; // Déplacement de 50px
            imageg2.style.top = positiongy2 + "px"; 
            
        }
        }

        function moveUp2() {
            if ( positiongy2 > 100) {
                
            positiongy2 -= 10*speed; // Déplacement de 50px
            imageg2.style.top = positiongy2 + "px"; }
        }
    
        function moveLeft2() {
            if (positiongx2 > 20 ) {
                positiongx2 -= 10*speed; 
                imageg2.style.left = positiongx2 + "px"; 
                console.log("moveLeft2");
            }
          
        }
    
        function moveRight2() {
            if (positiongx2 < window.innerWidth - 400 ) {
                positiongx2 += 10*speed; 
                imageg2.style.left= positiongx2 + "px"; 
               
            }
        }
    
       

        /*


      setInterval(function() {
            setTimeout(collisionPerso, 1000); // Relancer le mouvement après un petit délai
        }, 30); 
        
function handleKeyClick(key) {
    console.log("Touche pressée : " + key);
  
    if (key === 'D') {
        moveRight();
    } else if (key === "s") {
        moveDown();
    } else if (key === "z") {moveUp();
    } else {
      inputField.value += key;
    }
  }

const inputField = document.getElementById("input-field");
const keyboardContainer = document.getElementById("virtual-keyboard");

// Liste des caractères à afficher sur le clavier
const keys = [
  
  'Q', 'Z', 'E',
  'A', 'S', 'D'
];

// Fonction pour créer les touches du clavier
function createKeyboard() {
  keys.forEach(key => {
    const button = document.createElement("button");
    if (key === "Space") {
      button.textContent = "Space";
      button.classList.add("special");
      button.addEventListener("click", () => {
        inputField.value += " ";
      });
    } else if (key === "Backspace") {
      button.textContent = "←";
      button.classList.add("special");
      button.addEventListener("click", () => {
        inputField.value = inputField.value.slice(0, -1);
      });
    } else {
      button.textContent = key;
      button.addEventListener("click", () => {
        inputField.value += key;
      });
    }
    keyboardContainer.appendChild(button);
  });
}

// Initialiser le clavier
createKeyboard();

*/




function moveDownD() {
    if (posyDragon < window.innerHeight - 100) {
      
        posyDragon += 10; // Déplacement de 50px
    imageDragon.style.top = posyDragon + "px"; 
    
}
}


function moveBoule() {

    if( imageBoule.style.transform==='scale(0.5)')
    {
        if (posxBoule>innerWidth-100)
        {
            imageBoule.style.display="none"
            posyBoule = 0;
            posxBoule = 0;
        }
        else
        {
            posxBoule+=10;
            imageBoule.style.left= posxBoule + "px";
        }

    }

    if( imageBoule.style.transform==='scale(-0.5)')
        {
            if (posxBoule<20)
            {
                imageBoule.style.display="none"
                posyBoule = 0;
                posxBoule = 0;
            }
            else
            {
                posxBoule-=10;
                imageBoule.style.left= posxBoule + "px";
            }
    
        }


}

function sendBoule() {

    if(window.getComputedStyle(imageBoule).display === "none")
    {
    if ( imageDragon.style.transform==='scaleX(1)')
   { posxBoule = posxDragon-50;
    posyBoule = posyDragon-50;
    imageBoule.style.transform='scale(0.5)';
}
    else
    {
    posxBoule = posxDragon-50;
    posyBoule = posyDragon-50;
    imageBoule.style.transform='scale(-0.5)';
    }


    imageBoule.style.display = "block";
    imageBoule.style.left = posxBoule + "px"; 
imageBoule.style.top = posyBoule + "px"; 

}

}

let imagePierre = document.getElementById('Pierre');
function movePierre() {
    posxPierre -= 20;
    imagePierre.style.left = posxPierre + "px"; // Traverse toute la largeur de l'écran
    if(posxPierre<20) 
        {posxPierre = 1500;
        posyPierre= Math.floor(Math.random(0.6,0.7) * 200)+200;
      //  posyPierre = 300;
        imagePierre.style.top = posyPierre + "px";
    }

}

function movePierre2() {
    imagePierre2.display="block";
    posyPierre2 += 20;
    imagePierre2.style.top = posyPierre2 + "px"; // Traverse toute la largeur de l'écran
    if(posyPierre2>window.innerHeight-100) 
        {posyPierre2 = 100;
        posxPierre2= Math.floor(Math.random(0.8,0.9) *120)+800; 
       // posxPierre2=300;
        imagePierre2.style.left = posxPierre2 + "px";
    }

}

function movePierreb() {
    imagePierreb.display="block";
    posxPierreb -= 20;
    imagePierreb.style.left = posxPierreb + "px"; // Traverse toute la largeur de l'écran
    if(posxPierreb<20) 
        {posxPierreb = 1500;
        posyPierreb= Math.floor(Math.random(0.6,0.7) * 200)+400;
      //  posyPierreb = 300;
        imagePierreb.style.top = posyPierreb + "px";
    }

}

function movePierre2b() {
    imagePierre2b.display="block";
    posyPierre2b += 20;
    imagePierre2b.style.top = posyPierre2b + "px"; // Traverse toute la largeur de l'écran
    if(posyPierre2b>window.innerHeight-100) 
     {posyPierre2b = 100;
    posxPierre2b= Math.floor(Math.random(0.8,0.9) *120)+600; 
    // posxPierre2b=300;
    imagePierre2b.style.left = posxPierre2b + "px";
     }
}

function moveDragon2() {
   
    if(posyDragon2>posyDragon) 
     {
        posyDragon2 -=5;

    imageDragon2.style.top = posyDragon2 + "px";
     }
else
     {
        posyDragon2 +=5;

    imageDragon2.style.top = posyDragon2 + "px";
     }
     

}
  
function moveImageDefLeft() {
       posxDef+=100;
      let posxDragon2= parseInt(imageDragon2.style.left);
        if(posxDef===1450)
            {       
            if( (posyDef+20>posyDragon2)&&(posyDef<posyDragon2+20)){ dragon2HP-=20;   }
            console.log(posyDef+posyDragon2);
            }

            if(posxDef>1500)
                {       imgDefile=false;     

                }
          imageDefilante.style.left =posxDef + "px";


}

  


    function moveImageDefTop() {
       //posyDef=posyDragon;

       if(posyDef>posyDragon)posyDef-=5;
       else posyDef+=5;
        imageDefilante.style.top = posyDef + "px";
              }