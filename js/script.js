

const circularMenu = document.getElementById('circular-menu');
const circularMenuVisible = circularMenu.getBoundingClientRect();





const sectorMiddle = document.getElementById('sector-middle');

const sectorOne = document.getElementById('sector-one');
const sectorTwo = document.getElementById('sector-two');
const sectorThree = document.getElementById('sector-three');
const sectorFour = document.getElementById('sector-four');
const sectorFive = document.getElementById('sector-five');

function production() {
    sectorMiddle.style.backgroundImage = "url(../h4t/img/logo-h4t-produkcja.svg)";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";    
};

function trading() {
    sectorMiddle.style.backgroundImage = "url(../h4t/img/logo-h4t-trading.svg)";
    sectorMiddle.style.backgroundSize = "min(4.4rem, 45%)";    
};

function main() {
    sectorMiddle.style.backgroundImage = "url(../h4t/img/logo-h4t.svg)";
    sectorMiddle.style.backgroundSize = "min(6rem, 50%)";
};

sectorOne.addEventListener('mouseover', production);
sectorOne.addEventListener('mouseout', main);
sectorFour.addEventListener('mouseover', production);
sectorFour.addEventListener('mouseout', main);
sectorFive.addEventListener('mouseover', production);
sectorFive.addEventListener('mouseout', main);

sectorTwo.addEventListener('mouseover', trading);
sectorTwo.addEventListener('mouseout', main);
sectorThree.addEventListener('mouseover', trading);
sectorThree.addEventListener('mouseout', main);