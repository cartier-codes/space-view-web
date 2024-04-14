const profile = document.getElementById('profile');
const username = document.getElementById('username');
const level = document.getElementById('level');

document.addEventListener('DOMContentLoaded', ()=>{

  fetch('/space-view/public/api/account_data.php')
    .then(response => response.json())
    .then(data =>{
      let newStr = data.picture.replace(/\\\//g, "/");
      profile.src = `/space-view/public/${newStr}`
      username.innerHTML = data.username;
      level.innerHTML = data.level;

    })
    .catch(error => console.error(error))
})
