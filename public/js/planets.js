import { isDarkMode, setDarkMode } from "./darkMode.js";
const darkModeButton = document.getElementById('dark-mode');
const planet = document.getElementById('planet');
const price = document.getElementById('price');
const planetImage = document.getElementById('planet-img');
let planetData
function fetchEarth(){
 fetch(`includes/planet_data.php?`)
        .then(response => response.json())
        .then(data => {
            planet.innerText = data[0]['name'];
            price.innerText = '$'+ data[0]['pricing'];
            planetImage.src = data[0]['image_url'];
            planetData = data
            
        })
        .catch(error => console.error('Error:', error));
    
    
    }



document.addEventListener('DOMContentLoaded',()=>{
    fetchEarth()
    darkModeButton.addEventListener('click', ()=>{
        setDarkMode(!isDarkMode)
    })





})

