import typewriter from "../templates/typewriter.js"
  window.addEventListener('beforeunload', function () {
      window.scrollTo({
        top: 0,
        behavior: 'auto' // Use 'auto' for immediate jump to the top on refresh
      });
    });
function changeColor(){
   let headers = document.querySelectorAll('.astro-view')
   const hexColors = ['#FF5733', '#33FF57', '#5733FF', '#FF33A1', '#A1FF33', '#33A1FF', '#FF3362', '#62FF33', '#3362FF', '#FF3333', '#33FFC5', '#C533FF', '#FFC533', '#5333FF', '#FF33D1'];
   for(let i = 0; i < headers.length; i++){
      headers[i].style.color = hexColors[Math.floor(Math.random()*hexColors.length)]
   }
}

function createNewsCard(fetchedData){
  const newsCards =Array.from(document.querySelectorAll('.news-card'))
  newsCards.forEach((card,index)=>{

   let img = document.createElement('img')
   img.classList.add('img-fluid')
   img.src = fetchedData.results[index]['image_url']
   newsCards[index].appendChild(img)

   let h5  = document.createElement('h5')
   h5.innerHTML = fetchedData.results[index]['published_at'].substring(0,10)
   newsCards[index].appendChild(h5)

   let h2 = document.createElement('h2')
   h2.innerHTML = fetchedData.results[index]['title']
   newsCards[index].appendChild(h2)

   let p = document.createElement('p')
   p.innerHTML = fetchedData.results[index]['summary']
   newsCards[index].appendChild(p)

   let a  = document.createElement('a')
   a.href = fetchedData.results[index]['url']
   newsCards[index].appendChild(a)
  })
}






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

setInterval(changeColor, 300)
createNewsCard( {"results": [
   {
     "id": 22471,
     "title": "European-Made 3D Printer Will Be the First to Print Metal in Space",
     "url": "https://europeanspaceflight.com/european-made-3d-printer-will-be-the-first-to-print-metal-in-space/",
     "image_url": "https://europeanspaceflight.com/wp-content/uploads/2024/02/European-Made-3D-Printer-Will-Be-the-First-to-Print-Metal-in-Space.jpg",
     "news_site": "European Spaceflight",
     "summary": "A 3D printer developed by Airbus under a European Space Agency contract will be the first to print metal components aboard the International Space Station. Aboard the first Northrop Grumman Cygnus mission to be launched by a SpaceX Falcon 9 is a 180-kilogram 3D metal printer. The Cygnus spacecraft, which carried the name of late […]\nThe post European-Made 3D Printer Will Be the First to Print Metal in Space appeared first on European Spaceflight.",
     "published_at": "2024-02-03T06:53:38Z",
     "updated_at": "2024-02-03T06:56:58.179000Z",
     "featured": false,
     "launches": [],
     "events": []
   },
   {
     "id": 22470,
     "title": "Firefly to continue responsive launch operations for future Alpha missions",
     "url": "https://spacenews.com/firefly-to-continue-responsive-launch-operations-for-future-alpha-missions/",
     "image_url": "https://i0.wp.com/spacenews.com/wp-content/uploads/2023/09/F6DBVZXWwAApx0H-scaled.jpeg",
     "news_site": "SpaceNews",
     "summary": "Firefly Aerospace plans to make the responsive launch operations it demonstrated for the U.S. Space Force last year the norm for upcoming launches of its Alpha rocket.",
     "published_at": "2024-02-02T20:35:36Z",
     "updated_at": "2024-02-02T20:36:31.105000Z",
     "featured": false,
     "launches": [],
     "events": []
   },
   {
     "id": 22469,
     "title": "Eutelsat stops services on aging satellite following anomaly",
     "url": "https://spacenews.com/eutelsat-stops-services-on-aging-satellite-following-anomaly/",
     "image_url": "https://i0.wp.com/spacenews.com/wp-content/uploads/2021/08/41901305674_81155e440f_c.jpg",
     "news_site": "SpaceNews",
     "summary": "Eutelsat said Feb. 2 it has stopped providing services from an aging geostationary satellite over the Americas following an unspecified anomaly.",
     "published_at": "2024-02-02T16:41:35Z",
     "updated_at": "2024-02-02T16:46:21.055000Z",
     "featured": false,
     "launches": [],
     "events": []
   },
   {
     "id": 22468,
     "title": "Satellite phone networks can democratize global communication",
     "url": "https://spacenews.com/satellite-phone-networks-democratize-global-communication/",
     "image_url": "https://i0.wp.com/spacenews.com/wp-content/uploads/2024/01/SpaceX-D2D-webcast-scaled.jpg",
     "news_site": "SpaceNews",
     "summary": "As Starlink and other constellations come online, satellite phones could revolutionize the free flow of information.",
     "published_at": "2024-02-02T15:30:00Z",
     "updated_at": "2024-02-02T15:36:19.121000Z",
     "featured": false,
     "launches": [],
     "events": []
   },
   {
     "id": 22467,
     "title": "Blue Origin touts capabilities of Blue Ring transfer vehicle",
     "url": "https://spacenews.com/blue-origin-touts-capabilities-of-blue-ring-transfer-vehicle/",
     "image_url": "https://i0.wp.com/spacenews.com/wp-content/uploads/2023/10/bluering.jpg",
     "news_site": "SpaceNews",
     "summary": "Blue Origin is highlighting the capabilities of an orbital transfer vehicle design it announced last year, including the ability of the spacecraft to serve as a fuel depot.",
     "published_at": "2024-02-02T13:08:53Z",
     "updated_at": "2024-02-02T13:16:18.900000Z",
     "featured": false,
     "launches": [],
     "events": []
   }
 ]})
})