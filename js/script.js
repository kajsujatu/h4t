const circularMenu = document.getElementById('circular-menu');
const circularMenuVisible = circularMenu.getBoundingClientRect();

const sectorMiddle = document.getElementById('sector-middle');
const sectorOne = document.getElementById('sector-one');
const sectorTwo = document.getElementById('sector-two');
const sectorThree = document.getElementById('sector-three');
const sectorFour = document.getElementById('sector-four');
const sectorFive = document.getElementById('sector-five');

function setLogoProductionInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(../h4t/img/logo-h4t-produkcja.svg)";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";    
};

function setLogoTradingInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(../h4t/img/logo-h4t-trading.svg)";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";    
};

function setBasicLogoInSectorMiddle() {
    sectorMiddle.style.backgroundImage = "url(../h4t/img/logo-h4t.svg)";
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

const expandArticle = document.querySelectorAll('.expand-article-link')[0];

expandArticle.addEventListener('click', function() {
    document.querySelector('.article-content').classList.toggle('expand');
    if (this.innerHTML.includes("Rozwiń")) this.innerHTML = "Zwiń &#9650;"
    else if (this.innerHTML.includes("Zwiń")) this.innerHTML = "Rozwiń &#9660;"
});


const submitProduction = document.getElementById('submit-production');

submitProduction.addEventListener('click', function() {
   
   
})




    const navigationLinks = document.getElementById('navigation-links');
    const checkboxHamburger = document.getElementById('checkbox-hamburger');

    checkboxHamburger.addEventListener('change', function() {
         //   navigationLinks.style.display = "flex";
            navigationLinks.classList.toggle('mobile-links');
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

            onRotate: function() {
                
                //    this.angle = -this.angle; //little dynamic from -angle to +angle

           //     this.angle = -this.virtualAngle;  //little dynamic

                                                             
               // this.step.value === -(this.step.value);

                //when opacity is reduced
              // if (this.angle/this.step === 1) {
              //     let styleFilterFive = sectorFive.getAttributeNode("style"); 
              //     sectorFive.removeAttributeNode(styleFilterFive);
              //     sectorOne.style.filter = "opacity()";
              //     console.log('1. ' + this.angle);

              // } else if (this.angle/this.step === 2) {
              //     let styleFilterOne = sectorOne.getAttributeNode("style"); 
              //     sectorOne.removeAttributeNode(styleFilterOne);
              //     sectorTwo.style.filter = "opacity()";
              //     console.log('2.' + this.angle);
              //  
              // } else if (this.angle/this.step === 3) {
              //     let styleFilterTwo = sectorTwo.getAttributeNode("style"); 
              //     sectorTwo.removeAttributeNode(styleFilterTwo);
              //     sectorThree.style.filter = "opacity()";
              //     console.log('3.' + this.angle);
              // 
              // } else if (this.angle/this.step === 4) {
              //     let styleFilterThree = sectorThree.getAttributeNode("style"); 
              //     sectorThree.removeAttributeNode(styleFilterThree);
              //     sectorFour.style.filter = "opacity()";
              //     console.log('4.' + this.angle);
              //  
              // } else if (this.angle/this.step === 5) {
              //     let styleFilterFour = sectorFour.getAttributeNode("style"); 
              //     sectorFour.removeAttributeNode(styleFilterFour);
              //     sectorFive.style.filter = "opacity()";
              //     console.log('5.' + this.angle);
              //     
              //     this.angle = 0;
              //
              // };

              // 
               },
               });   
   
            }, 5000);
        



            //  onDragStop: function() {
              //  console.log('stop');
          //  },
          //  onDragStart: function () {
            //  document.getElementById('sector-middle').onRotated.setAttribute('style', 'transform: rotate(-100deg)');
          //  }
          
          
                  
           
        
    
        
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
