//img slider
let imgcurrentIndex = 0;
const imgslides = document.querySelectorAll('.imgslide');
const imgdots = document.querySelectorAll('.imgdot');

function showSlide(index) {
    if (index >= imgslides.length) {
        imgcurrentIndex = 0;
    } else if (index < 0) {
        imgcurrentIndex = imgslides.length - 1;
    } else {
        imgcurrentIndex = index;
    }

    // Met à jour la position du slider
    const slideWidth = imgslides[0].clientWidth;
    document.querySelector('.imgslider').style.transform = `translateX(-${imgcurrentIndex * slideWidth}px)`;

    // Met à jour les indicateurs
    imgdots.forEach(dot => dot.classList.remove('active'));
    imgdots[imgcurrentIndex].classList.add('active');
}

function moveSlide(step) {
    showSlide(imgcurrentIndex + step);
}

function currentSlide(index) {
    showSlide(index - 1);
}

// Afficher la première image
showSlide(imgcurrentIndex);

// Répéter le slider toutes les 3 secondes
setInterval(() => {
    moveSlide(1);
}, 3000);