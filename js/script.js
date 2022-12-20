// Change main logo at the top
let images = ['/h4t/-test-23/img/logo-h4t-horizontal.svg', '/h4t/-test-23/img/logo-h4t-production-horizontal.svg', '/h4t/-test-23/img/logo-h4t-trading-horizontal.svg'];

let index = 0;
const imgElement = document.querySelector('#logo-top');

function change() {
   imgElement.src = images[index];
   index > 1 ? index = 0 : index++;
}

window.onload = function() {
    setInterval(change, 8000);
};

// Hamburger Menu
const navigationLinks = document.getElementById('navigation-links');
const navMobile = document.getElementById('nav-mobile');
  
navMobile.addEventListener('click', () => {
   const visibility = navigationLinks.getAttribute('data-visible');

   if (visibility === 'false') { 
       navigationLinks.setAttribute('data-visible', true);
       navMobile.setAttribute('aria-expanded', true);
    } else if (visibility === 'true') {
       navigationLinks.setAttribute('data-visible', false);
       navMobile.setAttribute('aria-expanded', false);
    }
});

// Circular menu - changing on hover logo in the middle of the circle
const circularMenu = document.getElementById('circular-menu');
const sectorMiddle = document.getElementById('sector-middle');
const sectorOne = document.getElementById('sector-one');
const sectorTwo = document.getElementById('sector-two');
const sectorThree = document.getElementById('sector-three');
const sectorFour = document.getElementById('sector-four');
const sectorFive = document.getElementById('sector-five');

function setLogoProductionInSectorMiddle() {
   sectorMiddle.style.backgroundImage = "url(/h4t/-test-23/img/logo-h4t-production.svg)";
};

function setLogoTradingInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(/h4t/-test-23/img/logo-h4t-trading.svg)";
};

function setBasicLogoInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(/h4t/-test-23/img/logo-h4t.svg)";
};

sectorOne.addEventListener('mouseover', setLogoProductionInSectorMiddle);
sectorOne.addEventListener('mouseout', setBasicLogoInSectorMiddle);
sectorFour.addEventListener('mouseover', setLogoProductionInSectorMiddle);
sectorFour.addEventListener('mouseout', setBasicLogoInSectorMiddle);
sectorFive.addEventListener('mouseover', setLogoProductionInSectorMiddle);
sectorFive.addEventListener('mouseout', setBasicLogoInSectorMiddle);

sectorTwo.addEventListener('mouseover', setLogoTradingInSectorMiddle);
sectorTwo.addEventListener('mouseout', setBasicLogoInSectorMiddle);
sectorThree.addEventListener('mouseover', setLogoTradingInSectorMiddle);
sectorThree.addEventListener('mouseout', setBasicLogoInSectorMiddle);

// Stop Animations During Window Resizing - mostly for mobile navigation
let resizeTimer;
window.addEventListener("resize", () => {
  document.body.classList.add("resize-animation-stopper");
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    document.body.classList.remove("resize-animation-stopper");
  }, 400);
});

// Propeller.js
    setTimeout(() => {

        new Propeller(document.getElementById('circular-menu'), {
            inertia: 1,
            speed: -(.2),
            step: 72,
            stepTransitionTime: 1000,
            stepTransitionEasing: "ease-in-out",
            onDragStop: function() {
                        this.inertia = .99;
                        },
            onDragStart: function () {
                        this.inertia = .99;
                        },
        //  onRotate:
        });   

    }, 5000);

// Start animation of circular menu when user start to see it
     function showLibraryInfo() {
         if (window.libInfoShown !== true) {
             var windStuff = document.getElementsByClassName('wind');
             var libStuff = document.getElementsByClassName('propeller');
             for (var i = 0; i < windStuff.length; i++) {
                 var obj = windStuff[i];
                 obj.style.display = 'none';
             }
             for (var i = 0; i < libStuff.length; i++) {
                 var obj = libStuff[i];
                 obj.style.display = 'inline-block';
             }
             window.libInfoShown = true;
         }
     }

// Expand list
    const expandButton = document.getElementById('expand-button');
    const expandedDiv = document.getElementById('cutoff-text');

    expandButton.addEventListener('click', () => {
        const visibility = expandedDiv.getAttribute('data-visible');
        if (visibility === 'false') { 
            expandedDiv.setAttribute('data-visible', true);
         } else if (visibility === 'true') {
            expandedDiv.setAttribute('data-visible', false);

            if (expandButton.classList.contains('expand-button-pl')) window.location.href='#metoda-8-krokow-do-uzyskania-perfekcyjnego-worka';
            if (expandButton.classList.contains('expand-button-en')) window.location.href='#8-step-method-to-get-the-perfect-liner';
            if (expandButton.classList.contains('expand-button-de')) window.location.href='#die-8-schritte-methode-fur-die-perfekte-sackform';
         }
    });

// Expand list - not use anymore but save code for future
//     const listContainedExpandedList = document.getElementById('ol-welding-container-steps').children;
//     const triangleExpandList = document.querySelectorAll('.triangle-to-expand-list');
//     const listExpanded = document.querySelectorAll('.list-expanded');
//
//     for (let i=0; i<listContainedExpandedList.length; i++) {
//        triangleExpandList[i].addEventListener('click', () => {
//        const visibility = listExpanded[i].getAttribute('data-visible');
//        
//        if (visibility === 'false') { 
//            listExpanded[i].setAttribute('data-visible', true);
//            triangleExpandList[i].classList.add('triangle-active');
//         } else if (visibility === 'true') {
//            listExpanded[i].setAttribute('data-visible', false);
//            triangleExpandList[i].classList.remove('triangle-active');
//         }
//    });
//};

//const expandArticle = document.querySelectorAll('.expand-article-link')[0];
//
//expandArticle.addEventListener('click', function() {
//    document.querySelector('.article-content').classList.toggle('expand');
//    if (this.innerHTML.includes("Rozwiń")) this.innerHTML = "Zwiń &#9650;"
//    else if (this.innerHTML.includes("Zwiń")) this.innerHTML = "Rozwiń &#9660;"
//});
//

// Current Year
const currentYearSpan = document.getElementById('current-year');
const currentYear = new Date().getFullYear();
currentYearSpan.innerText = currentYear;






