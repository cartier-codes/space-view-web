let isDarkMode = false;
const navImages = document.querySelectorAll('nav img');
const featureLogos = document.querySelectorAll('.features')


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


}

export {isDarkMode, setDarkMode}