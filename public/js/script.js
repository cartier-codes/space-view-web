import typewriter from "../templates/typewriter.js";

let resizedSlideHeight;
let slides;

function changeColor() {
  let headers = document.querySelectorAll('.astro-view');
  const hexColors = ['#FF5733', '#33FF57', '#5733FF', '#FF33A1', '#A1FF33', '#33A1FF', '#FF3362', '#62FF33', '#3362FF', '#FF3333', '#33FFC5', '#C533FF', '#FFC533', '#5333FF', '#FF33D1'];
  for (let i = 0; i < headers.length; i++) {
    headers[i].style.color = hexColors[Math.floor(Math.random() * hexColors.length)];
  }
}

function getDate(){
  const currentDate = new Date();
  const isoString = currentDate.toISOString();
  return isoString
}

function createNewsCard(fetchedData) {
  const newsCards = Array.from(document.querySelectorAll('.news-card'));
  newsCards.forEach((card, index) => {
    let img = document.createElement('img');
    img.classList.add('img-fluid');
    img.src = fetchedData.results[index]['image_url'];
    newsCards[index].appendChild(img);

    let h5 = document.createElement('h5');
    h5.innerHTML = fetchedData.results[index]['published_at'].substring(0, 10);
    newsCards[index].appendChild(h5);

    let h2 = document.createElement('h2');
    h2.innerHTML = fetchedData.results[index]['title'];
    newsCards[index].appendChild(h2);

    let p = document.createElement('p');
    p.innerHTML = fetchedData.results[index]['summary'];
    newsCards[index].appendChild(p);

    let a = document.createElement('a');
    a.href = fetchedData.results[index]['url'];
    a.innerHTML = 'Find out more >';
    newsCards[index].appendChild(a);
  });
}

function fetchNewsArticles() {
  const apiUrl = 'https://api.spaceflightnewsapi.net/v4/articles/?limit=5';

  fetch(apiUrl)
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      createNewsCard(data);
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

function fetchAPOD(){
  const img = document.getElementById('apod');
  const title = document.getElementById('apod-title')
  const date = document.getElementById('apod-date')
  const description = document.getElementById('apod-description');
  const apiUrl = 'https://api.nasa.gov/planetary/apod?api_key=3BClU0vD21KkUtNwDQgq4CymUxjUGOmZg6OV80SC'

  fetch(apiUrl)
    .then(response => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then(data => {
      img.src = data['hdurl']
      title.innerHTML = data['title']
      date.innerHTML = data['date']
      description.innerHTML = data['explanation']
    })
    .catch(error => {
      console.error('Error', error);
    });
}




document.addEventListener('DOMContentLoaded', () => {
  let intro = document.getElementById('intro');
  let row1 = document.getElementById('img-grid-1');
  let row2 = document.getElementById('img-grid-2');

  setTimeout(typewriter('WHAT IS SPACE?', 'intro'), 1000);
  setTimeout(() => {
    row1.classList.add('visible');
    row2.classList.add('visible');
  }, 1250);
  setTimeout(() => {
    intro.scrollIntoView({ behavior: 'smooth' });
  }, 2000);
  setTimeout(() => {
    document.body.style.overflowY = 'auto';
  }, 1100);

  setInterval(changeColor, 300);

  fetchNewsArticles()

fetchAPOD()
});
