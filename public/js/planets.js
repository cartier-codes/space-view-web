import { isDarkMode, setDarkMode } from "./darkMode.js";
  const darkModeButton = document.getElementById('dark-mode');
    const changeButton = document.getElementById('changeStuff');
    const planet = document.getElementById('planet');

function fetchPlanet(){
let random = Math.floor(Math.random()*8 + 1);
let id = random

 fetch(`../public/includes/planet_data.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            // Handle the response data
            planet.innerText = data.name + ':';

        })
        .catch(error => console.error('Error:', error));
    }

document.addEventListener('DOMContentLoaded',()=>{
  

    darkModeButton.addEventListener('click', ()=>{
        setDarkMode(!isDarkMode)
    })

    changeButton.addEventListener('click', fetchPlanet)





})

