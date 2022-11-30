const circularMenu = document.getElementById('circular-menu');

const sectorMiddle = document.getElementById('sector-middle');
const sectorOne = document.getElementById('sector-one');
const sectorTwo = document.getElementById('sector-two');
const sectorThree = document.getElementById('sector-three');
const sectorFour = document.getElementById('sector-four');
const sectorFive = document.getElementById('sector-five');

function setLogoProductionInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(http://projektgrafika.cba.pl/h4t/wersja-testowa-2de/img/logo-h4t-produkcja.svg";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";    
};

function setLogoTradingInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(http://projektgrafika.cba.pl/h4t/wersja-testowa-2de/img/logo-h4t-trading.svg)";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";    
};

function setBasicLogoInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(http://projektgrafika.cba.pl/h4t/wersja-testowa-2de/img/logo-h4t.svg)";
    sectorMiddle.style.backgroundSize = "min(6rem, 50%)";
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




//const expandArticle = document.querySelectorAll('.expand-article-link')[0];
//
//expandArticle.addEventListener('click', function() {
//    document.querySelector('.article-content').classList.toggle('expand');
//    if (this.innerHTML.includes("Rozwiń")) this.innerHTML = "Zwiń &#9650;"
//    else if (this.innerHTML.includes("Zwiń")) this.innerHTML = "Rozwiń &#9660;"
//});
//

//const submitProduction = document.getElementById('submit-production');
//
//submitProduction.addEventListener('click', function() {
//   
//   
//})
//



    const navigationLinks = document.getElementById('navigation-links');
    const navMobile = document.getElementById('nav-mobile');
    const lineOne = document.querySelectorAll('.line1')[0];
    const lineTwo = document.querySelectorAll('.line2')[0];
    const lineThree = document.querySelectorAll('.line3')[0];


    navMobile.addEventListener('click', () => {
       // navMobile.classList.toggle('nav-mobile-active')
       const visibility = navigationLinks.getAttribute('data-visible');

        if (visibility === 'false') { 
            navigationLinks.setAttribute('data-visible', true);
            navMobile.setAttribute('aria-expanded', true);
            navigationLinks.style.visibility = 'visible';
            navigationLinks.style.transform = 'translateX(0)';
            lineOne.style.transform = 'rotate(45deg)'; 
            lineTwo.style.transform = 'scaleY(0)'; 
            lineThree.style.transform = 'rotate(-45deg)';

        } else if (visibility === 'true') {
            navigationLinks.setAttribute('data-visible', false);
            navigationLinks.style.visibility = 'hidden';
          //  navigationLinks.style.transform = 'translateX(110%)';
            navMobile.setAttribute('aria-expanded', false);
            navigationLinks.removeAttribute('style');
            lineOne.removeAttribute('style');
            lineTwo.removeAttribute('style');
            lineThree.removeAttribute('style');
        }

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

        //    onRotate: function() {
        //    },
            
        });   
   
            }, 5000);
        
        
        const upButton = document.getElementsByClassName('button');
      
                
        const sectorOutside = document.getElementById('sector-outside');



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
