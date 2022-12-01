// Circular menu - changing logo in the middle of circle

const circularMenu = document.getElementById('circular-menu');
const sectorMiddle = document.getElementById('sector-middle');
const sectorOne = document.getElementById('sector-one');
const sectorTwo = document.getElementById('sector-two');
const sectorThree = document.getElementById('sector-three');
const sectorFour = document.getElementById('sector-four');
const sectorFive = document.getElementById('sector-five');

function setLogoProductionInSectorMiddle() {
   sectorMiddle.style.backgroundImage = "url(img/logo-h4t-produkcja.svg)";
   sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";
   sectorMiddle.style.backgroundRepeat = "no-repeat";
   sectorMiddle.style.backgroundPosition = "center";
};

function setLogoTradingInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(img/logo-h4t-trading.svg)";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";
    sectorMiddle.style.backgroundRepeat = "no-repeat";
    sectorMiddle.style.backgroundPosition = "center";
};

function setBasicLogoInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(img/logo-h4t.svg)";
    sectorMiddle.style.backgroundSize = "min(6rem, 50%)";
    sectorMiddle.style.backgroundRepeat = "no-repeat";
    sectorMiddle.style.backgroundPosition = "center";
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


     const listContainedExpandedList = document.getElementById('ol-welding-container-steps').children;
     const triangleExpandList = document.querySelector('.triangle-to-expand-list');
     const listExpanded = document.querySelector('.list-expanded');


   //  for (let i=0; i<listContainedExpandedList.children.length; i++) {

        console.log(listContainedExpandedList);

        console.log(listContainedExpandedList[0]);
        console.log(listContainedExpandedList[1]);
        console.log(triangleExpandList);
        console.log(listExpanded);



   //    for (let i=0; i<listContainedExpandedList.length; i++) {

   //        triangleExpandList.addEventListener('click', () => {

   //            console.log(listContainedExpandedList[i]);

   //             const visibility = listExpanded.getAttribute('data-visible');
   //         
   //         if (visibility === 'false') { 
   //             listExpanded.setAttribute('data-visible', true);
   //          } else if (visibility === 'true') {
   //             listExpanded.setAttribute('data-visible', false);
   //          }


   //        });
   //    };
        

  //     const makeVisible = function() {
  //         const visibility = listExpanded.getAttribute('data-visible');
 
  //         if (visibility === 'false') { 
  //             listExpanded.setAttribute('data-visible', true);
  //          } else if (visibility === 'true') {
  //             listExpanded.setAttribute('data-visible', false);
  //          }
  //      };      



  //     triangleExpandList.addEventListener('click', makeVisible);








