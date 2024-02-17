import { isDarkMode, setDarkMode } from "./darkMode.js";
const darkModeButton = document.getElementById('dark-mode');
let planetData
let planetCards = document.querySelectorAll('.planet')
function capitalize(s)
{
    return s[0].toUpperCase() + s.slice(1);
}

function fetchPlanets(){
    fetch('api/planet_data.php')
    .then(response => response.json())
    .then(data => {
        makePlanetCards(data)
        planetData=data})
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

function displayBigPlanet(data){
    

}
document.addEventListener('DOMContentLoaded',()=>{
    fetchPlanets()
    darkModeButton.addEventListener('click', ()=>{
        setDarkMode(!isDarkMode)
    })
    planetCards.forEach((card)=>{
        card.addEventListener('click',()=>{
            console.log('click')
        })
    })




})

