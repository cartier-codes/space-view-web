let isDarkMode = false;
const logo = document.querySelector('nav img');


function setDarkMode(mode){
    isDarkMode = mode;
    updateStyles()
}

function updateStyles(){
    logo.style.filter = isDarkMode ? 'invert(100%)' : 'invert(0%)';
    document.body.style.color = isDarkMode ? '#e6e6fa' : '#323232';
}

export {isDarkMode, setDarkMode}