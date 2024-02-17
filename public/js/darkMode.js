let isDarkMode = false;
const navImages = document.querySelectorAll('nav img');
const featureLogos = document.querySelectorAll('.features')
const buttons = document.querySelectorAll('button')
const cardRatings = document.querySelectorAll('.rating')

function setDarkMode(mode){
    isDarkMode = mode;
    updateStyles()
}

function updateStyles(){
    navImages.forEach((img)=>{
        img.style.filter = isDarkMode ? 'invert(100%)' : 'invert(0%)';
    })
    featureLogos.forEach((img)=>{
        img.style.filter = isDarkMode ? 'invert(100%)' : 'invert(0%)';
    })
    document.body.style.color = isDarkMode ? '#e6e6fa' : '#323232';
    document.body.style.backgroundColor = isDarkMode ? '#323232' : '#e6e6fa';
    buttons.forEach((button)=>{
        button.style.backgroundColor = isDarkMode ? '#323232' : '#e6e6fa';
        button.style.color = isDarkMode ? '#e6e6fa' : '#323232';
    cardRatings.forEach((rating)=>{
        rating.style.backgroundColor = isDarkMode ? 'black' : 'white';
        rating.style.color = isDarkMode ? 'white' : 'black';
    })

    })
}

export {isDarkMode, setDarkMode}