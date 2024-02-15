import { isDarkMode, setDarkMode } from "./darkMode.js";
const darkModeButton = document.getElementById('dark-mode');
const changeButton = document.getElementById('changeStuff');
const planet = document.getElementById('planet');
const price = document.getElementById('price');


function fetchPlanet(){
 fetch(`includes/planet_data.php?`)
        .then(response => response.json())
        .then(data => {
           console.log(data) 

        })
        .catch(error => console.error('Error:', error));
    }

document.addEventListener('DOMContentLoaded',()=>{
  

    darkModeButton.addEventListener('click', ()=>{
        setDarkMode(!isDarkMode)
    })

    changeButton.addEventListener('click', fetchPlanet)





})

