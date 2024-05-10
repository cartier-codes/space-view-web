const profile = document.getElementById('profile');
const username = document.getElementById('username');
const level = document.getElementById('level');
const tours = document.getElementById('tours');
const basketTitle = document.getElementById('basket-total');

document.addEventListener('DOMContentLoaded', ()=>{

function basketNumber(){
  fetch('/space-view/public/api/access_basket.php?length=true')
    .then((response)=>response.json())
    .then(data => basketTitle.innerText = data)
    .catch(error => console.error('Error:', error));
}

basketNumber()
  fetch('/space-view/public/api/account_data.php?api=true')
    .then(response => response.json())
    .then(data =>{
      let newStr = data.picture.replace(/\\\//g, "/");
      profile.src = `/space-view/public/${newStr}`
      username.innerHTML = data.username;
      level.innerHTML += data.level;
      tours.innerHTML += data.tours_completed;
      console.log(data)



    })
    .catch(error => console.error(error))
})
