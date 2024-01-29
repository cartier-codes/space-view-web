import typewriter from "../templates/typewriter.js"
  window.addEventListener('beforeunload', function () {
      window.scrollTo({
        top: 0,
        behavior: 'auto' // Use 'auto' for immediate jump to the top on refresh
      });
    });

document.addEventListener('DOMContentLoaded', ()=>{
let intro = document.getElementById('intro')
let row1 = document.getElementById('img-grid-1')
let row2 = document.getElementById('img-grid-2')
setTimeout(typewriter('WHAT IS SPACE?','intro'),1000)
 setTimeout(()=>{
    row1.classList.add('visible');
    row2.classList.add('visible');
 },1250)
 setTimeout(()=>{
    intro.scrollIntoView({behavior:'smooth'});
 },2000)
 setTimeout(()=>{
    document.body.style.overflowY = 'auto'
 },1100)
  
})