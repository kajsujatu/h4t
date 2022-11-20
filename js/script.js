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