import { isDarkMode, setDarkMode } from "./darkMode.js";
const darkModeButton = document.getElementById('dark-mode');
let planetCards = document.querySelectorAll('.planet')
let buyButton = document.getElementById('buyNow')
const title = document.getElementById('planet');
const basketTitle = document.getElementById('basket-total')
const moreButton = document.getElementById('more');
const firstRow = document.getElementById('otherPlanets');
const secondRow = document.getElementById('otherPlanets2');
const thirdRow = document.getElementById('otherPlanets3');


function basketNumber(){
    fetch('api/basket_data.php')
    .then((response)=>response.json())
    .then(data => basketTitle.innerText = data)
    .catch(error => console.error('Error:', error));
}

basketNumber()

function capitalize(s)
{
    return s[0].toUpperCase() + s.slice(1);
}

function fetchPlanets(){
    fetch('api/planet_data.php')
    .then(response => response.json())
    .then(data => {
        makePlanetCards(data)})
    .catch(error => console.error('Error', error))
}

function makePlanetCards(data){
    const planetImages = document.querySelectorAll('.planet-image')
    const ratings = document.querySelectorAll('.planet h6')
    const titles = document.querySelectorAll('.planet-card-title');

    planetImages.forEach((image,number)=>{
       image.src = data[number]['still_image']
       ratings[number].innerText = data[number]['rating']
       titles[number].innerText = capitalize(data[number]['name']) + ' tour'
    })
}

function fetchIndividualPlanet(card){
    let id = Array.prototype.indexOf.call(planetCards, card) +1
    fetch(`api/individual_planet.php?id=${id}`)
    .then(response => response.json())
    .then(data =>displayPlanet(data))

}

function displayPlanet(data){
const title = document.getElementById('planet');
const featureTitle = document.querySelectorAll('.feature-title')
const pricing = document.getElementById('price');
const planetGIF = document.querySelector('.planet-img')
const featureDescription = document.querySelectorAll('.feature-description')
const featureImg = document.querySelectorAll('.features')
featureTitle.forEach((feature, index)=>{
    feature.innerText = data[0][`feature_${index+1}`]
})
featureDescription.forEach((feature, index)=>{
    feature.innerText = data[0][`feature_${index+1}_description`]
})

featureImg.forEach((img,index)=>{
    if(index == 0){
        img.src = data[0]['feature_img']
    }
    else{
        img.src = data[0][`feature_${index+1}_img`]
    }
})
title.innerText = data[0].name + ':'
planetGIF.src = data[0]['image_url']
planetGIF.id = `${data[0].name}`
pricing.innerText = '$' + data[0]['pricing']


}

function addToBasket(str){
let name = str.slice(0, -1);
    fetch(`api/add_to_basket.php?name=${name}`)
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error', error))

basketNumber()
 }

function flex(row){
    row.style.display = row.style.display == 'flex'? 'none' : 'flex';

}


document.addEventListener('DOMContentLoaded',()=>{
    fetchPlanets()
    darkModeButton.addEventListener('click', ()=>{
        setDarkMode(!isDarkMode)
    })
    moreButton.addEventListener('click',()=>{
        flex(secondRow)
        flex(thirdRow)
    })
    buyButton.addEventListener('click', ()=>{
        addToBasket(title.innerText)
    })
    console.log()
    planetCards.forEach((card)=>{
        card.addEventListener('click',()=>{
            fetchIndividualPlanet(card)
        })
    })
})
