import { isDarkMode, setDarkMode } from "./darkMode.js";


document.addEventListener('DOMContentLoaded',()=>{
    const darkModeButton = document.getElementById('dark-mode');
    darkModeButton.addEventListener('click', ()=>{
        setDarkMode(!isDarkMode)
    })

})

