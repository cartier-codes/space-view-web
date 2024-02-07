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
   a.innerHTML = 'Find out more >'
   newsCards[index].appendChild(a)
  })
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

 function fetchSpaceLaunches(){
  const apiUrl = "https://ll.thespacedevs.com/2.2.0/launch/?limit=5"

  fetch(apiUrl)
    .then(response =>{
      if(!response.ok){
        throw new Error(`HTTP error! Status: ${response.status}`)
      }
      return response.json()
    })
    .then(data =>{
      console.log(data)
      })
    .catch(error =>{
      console.error('Error', error)})
 }

let data = {
  "count": 7160,
  "next": "https://ll.thespacedevs.com/2.2.0/launch/?limit=5&offset=5",
  "previous": null,
  "results": [
    {
      "id": "e3df2ecd-c239-472f-95e4-2b89b4f75800",
      "url": "https://ll.thespacedevs.com/2.2.0/launch/e3df2ecd-c239-472f-95e4-2b89b4f75800/",
      "slug": "sputnik-8k74ps-sputnik-1",
      "name": "Sputnik 8K74PS | Sputnik 1",
      "status": {
        "id": 3,
        "name": "Launch Successful",
        "abbrev": "Success",
        "description": "The launch vehicle successfully inserted its payload(s) into the target orbit(s)."
      },
      "last_updated": "2023-06-14T03:48:33Z",
      "net": "1957-10-04T19:28:34Z",
      "window_end": "1957-10-04T19:28:34Z",
      "window_start": "1957-10-04T19:28:34Z",
      "net_precision": null,
      "probability": null,
      "weather_concerns": null,
      "holdreason": null,
      "failreason": null,
      "hashtag": null,
      "launch_service_provider": {
        "id": 66,
        "url": "https://ll.thespacedevs.com/2.2.0/agencies/66/",
        "name": "Soviet Space Program",
        "type": "Government"
      },
      "rocket": {
        "id": 3003,
        "configuration": {
          "id": 468,
          "url": "https://ll.thespacedevs.com/2.2.0/config/launcher/468/",
          "name": "Sputnik 8K74PS",
          "family": "Sputnik",
          "full_name": "Sputnik 8K74PS",
          "variant": "8K74PS"
        }
      },
      "mission": {
        "id": 1430,
        "name": "Sputnik 1",
        "description": "First artificial satellite consisting of a 58 cm pressurized aluminium shell containing two 1 W transmitters for a total mass of 83.6 kg.",
        "launch_designator": null,
        "type": "Test Flight",
        "orbit": {
          "id": 8,
          "name": "Low Earth Orbit",
          "abbrev": "LEO"
        },
        "agencies": [],
        "info_urls": [],
        "vid_urls": []
      },
      "pad": {
        "id": 32,
        "url": "https://ll.thespacedevs.com/2.2.0/pad/32/",
        "agency_id": null,
        "name": "1/5",
        "description": null,
        "info_url": null,
        "wiki_url": "",
        "map_url": "https://www.google.com/maps?q=45.92,63.342",
        "latitude": "45.92",
        "longitude": "63.342",
        "location": {
          "id": 15,
          "url": "https://ll.thespacedevs.com/2.2.0/location/15/",
          "name": "Baikonur Cosmodrome, Republic of Kazakhstan",
          "country_code": "KAZ",
          "description": null,
          "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/location_15_20200803142517.jpg",
          "timezone_name": "Asia/Qyzylorda",
          "total_launch_count": 1545,
          "total_landing_count": 0
        },
        "country_code": "KAZ",
        "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/pad_32_20200803143513.jpg",
        "total_launch_count": 487,
        "orbital_launch_attempt_count": 487
      },
      "webcast_live": false,
      "image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launcher_images/sputnik_8k74ps_image_20210830185541.jpg",
      "infographic": null,
      "program": [],
      "orbital_launch_attempt_count": 1,
      "location_launch_attempt_count": 1,
      "pad_launch_attempt_count": 1,
      "agency_launch_attempt_count": 1,
      "orbital_launch_attempt_count_year": 1,
      "location_launch_attempt_count_year": 1,
      "pad_launch_attempt_count_year": 1,
      "agency_launch_attempt_count_year": 1,
      "type": "normal"
    },
    {
      "id": "f8c9f344-a6df-4f30-873a-90fe3a7840b3",
      "url": "https://ll.thespacedevs.com/2.2.0/launch/f8c9f344-a6df-4f30-873a-90fe3a7840b3/",
      "slug": "sputnik-8k74ps-sputnik-2",
      "name": "Sputnik 8K74PS | Sputnik 2",
      "status": {
        "id": 3,
        "name": "Launch Successful",
        "abbrev": "Success",
        "description": "The launch vehicle successfully inserted its payload(s) into the target orbit(s)."
      },
      "last_updated": "2023-06-14T03:48:36Z",
      "net": "1957-11-03T02:30:00Z",
      "window_end": "1957-11-03T02:30:00Z",
      "window_start": "1957-11-03T02:30:00Z",
      "net_precision": null,
      "probability": null,
      "weather_concerns": null,
      "holdreason": null,
      "failreason": null,
      "hashtag": null,
      "launch_service_provider": {
        "id": 66,
        "url": "https://ll.thespacedevs.com/2.2.0/agencies/66/",
        "name": "Soviet Space Program",
        "type": "Government"
      },
      "rocket": {
        "id": 3004,
        "configuration": {
          "id": 468,
          "url": "https://ll.thespacedevs.com/2.2.0/config/launcher/468/",
          "name": "Sputnik 8K74PS",
          "family": "Sputnik",
          "full_name": "Sputnik 8K74PS",
          "variant": "8K74PS"
        }
      },
      "mission": {
        "id": 1431,
        "name": "Sputnik 2",
        "description": "Second artificial satellite and first to carry an animal into orbit.",
        "launch_designator": null,
        "type": "Test Flight",
        "orbit": {
          "id": 8,
          "name": "Low Earth Orbit",
          "abbrev": "LEO"
        },
        "agencies": [],
        "info_urls": [],
        "vid_urls": []
      },
      "pad": {
        "id": 32,
        "url": "https://ll.thespacedevs.com/2.2.0/pad/32/",
        "agency_id": null,
        "name": "1/5",
        "description": null,
        "info_url": null,
        "wiki_url": "",
        "map_url": "https://www.google.com/maps?q=45.92,63.342",
        "latitude": "45.92",
        "longitude": "63.342",
        "location": {
          "id": 15,
          "url": "https://ll.thespacedevs.com/2.2.0/location/15/",
          "name": "Baikonur Cosmodrome, Republic of Kazakhstan",
          "country_code": "KAZ",
          "description": null,
          "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/location_15_20200803142517.jpg",
          "timezone_name": "Asia/Qyzylorda",
          "total_launch_count": 1545,
          "total_landing_count": 0
        },
        "country_code": "KAZ",
        "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/pad_32_20200803143513.jpg",
        "total_launch_count": 487,
        "orbital_launch_attempt_count": 487
      },
      "webcast_live": false,
      "image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launcher_images/sputnik_8k74ps_image_20210830185541.jpg",
      "infographic": null,
      "program": [],
      "orbital_launch_attempt_count": 2,
      "location_launch_attempt_count": 2,
      "pad_launch_attempt_count": 2,
      "agency_launch_attempt_count": 2,
      "orbital_launch_attempt_count_year": 2,
      "location_launch_attempt_count_year": 2,
      "pad_launch_attempt_count_year": 2,
      "agency_launch_attempt_count_year": 2,
      "type": "normal"
    },
    {
      "id": "535c1a09-97c8-4f96-bb64-6336d4bcb1fb",
      "url": "https://ll.thespacedevs.com/2.2.0/launch/535c1a09-97c8-4f96-bb64-6336d4bcb1fb/",
      "slug": "vanguard-vanguard",
      "name": "Vanguard | Vanguard",
      "status": {
        "id": 4,
        "name": "Launch Failure",
        "abbrev": "Failure",
        "description": "Either the launch vehicle did not reach orbit, or the payload(s) failed to separate."
      },
      "last_updated": "2023-06-14T17:43:00Z",
      "net": "1957-12-06T16:44:35Z",
      "window_end": "1957-12-06T16:44:35Z",
      "window_start": "1957-12-06T16:44:35Z",
      "net_precision": null,
      "probability": null,
      "weather_concerns": null,
      "holdreason": null,
      "failreason": null,
      "hashtag": null,
      "launch_service_provider": {
        "id": 166,
        "url": "https://ll.thespacedevs.com/2.2.0/agencies/166/",
        "name": "US Navy",
        "type": "Government"
      },
      "rocket": {
        "id": 3005,
        "configuration": {
          "id": 449,
          "url": "https://ll.thespacedevs.com/2.2.0/config/launcher/449/",
          "name": "Vanguard",
          "family": "Vanguard",
          "full_name": "Vanguard",
          "variant": ""
        }
      },
      "mission": {
        "id": 1432,
        "name": "Vanguard",
        "description": "Small satellite used to test the Vanguard three-stage launch vehicle.",
        "launch_designator": null,
        "type": "Test Flight",
        "orbit": {
          "id": 8,
          "name": "Low Earth Orbit",
          "abbrev": "LEO"
        },
        "agencies": [],
        "info_urls": [],
        "vid_urls": []
      },
      "pad": {
        "id": 118,
        "url": "https://ll.thespacedevs.com/2.2.0/pad/118/",
        "agency_id": 166,
        "name": "Launch Complex 18A",
        "description": null,
        "info_url": null,
        "wiki_url": "https://en.wikipedia.org/wiki/Cape_Canaveral_Launch_Complex_18",
        "map_url": "https://www.google.com/maps?q=28.4493,-80.564494",
        "latitude": "28.4493",
        "longitude": "-80.564494",
        "location": {
          "id": 12,
          "url": "https://ll.thespacedevs.com/2.2.0/location/12/",
          "name": "Cape Canaveral, FL, USA",
          "country_code": "USA",
          "description": null,
          "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/location_12_20200803142519.jpg",
          "timezone_name": "America/New_York",
          "total_launch_count": 932,
          "total_landing_count": 45
        },
        "country_code": "USA",
        "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/pad_118_20200803143338.jpg",
        "total_launch_count": 18,
        "orbital_launch_attempt_count": 11
      },
      "webcast_live": false,
      "image": null,
      "infographic": null,
      "program": [],
      "orbital_launch_attempt_count": 3,
      "location_launch_attempt_count": 1,
      "pad_launch_attempt_count": 1,
      "agency_launch_attempt_count": 1,
      "orbital_launch_attempt_count_year": 3,
      "location_launch_attempt_count_year": 1,
      "pad_launch_attempt_count_year": 1,
      "agency_launch_attempt_count_year": 1,
      "type": "normal"
    },
    {
      "id": "1b9e28d0-c531-44b0-9b37-244e62a6d3f4",
      "url": "https://ll.thespacedevs.com/2.2.0/launch/1b9e28d0-c531-44b0-9b37-244e62a6d3f4/",
      "slug": "juno-i-explorer-1",
      "name": "Juno-I | Explorer 1",
      "status": {
        "id": 3,
        "name": "Launch Successful",
        "abbrev": "Success",
        "description": "The launch vehicle successfully inserted its payload(s) into the target orbit(s)."
      },
      "last_updated": "2023-06-14T17:40:22Z",
      "net": "1958-02-01T03:47:56Z",
      "window_end": "1958-02-01T03:47:56Z",
      "window_start": "1958-02-01T03:47:56Z",
      "net_precision": null,
      "probability": null,
      "weather_concerns": null,
      "holdreason": null,
      "failreason": null,
      "hashtag": null,
      "launch_service_provider": {
        "id": 271,
        "url": "https://ll.thespacedevs.com/2.2.0/agencies/271/",
        "name": "Army Ballistic Missile Agency",
        "type": "Government"
      },
      "rocket": {
        "id": 3006,
        "configuration": {
          "id": 324,
          "url": "https://ll.thespacedevs.com/2.2.0/config/launcher/324/",
          "name": "Juno-I",
          "family": "Redstone",
          "full_name": "Juno-I",
          "variant": "Juno I"
        }
      },
      "mission": {
        "id": 1433,
        "name": "Explorer 1",
        "description": "First successfully launched American satellite. It was the first spacecraft to detect the Van Allen Radiation Belt.",
        "launch_designator": null,
        "type": "Test Flight",
        "orbit": {
          "id": 8,
          "name": "Low Earth Orbit",
          "abbrev": "LEO"
        },
        "agencies": [],
        "info_urls": [],
        "vid_urls": []
      },
      "pad": {
        "id": 193,
        "url": "https://ll.thespacedevs.com/2.2.0/pad/193/",
        "agency_id": 161,
        "name": "Launch Complex 26A",
        "description": null,
        "info_url": null,
        "wiki_url": "https://en.wikipedia.org/wiki/Cape_Canaveral_Air_Force_Station_Launch_Complex_26",
        "map_url": "https://www.google.com/maps?q=28.4433,-80.5712",
        "latitude": "28.4433",
        "longitude": "-80.5712",
        "location": {
          "id": 12,
          "url": "https://ll.thespacedevs.com/2.2.0/location/12/",
          "name": "Cape Canaveral, FL, USA",
          "country_code": "USA",
          "description": null,
          "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/location_12_20200803142519.jpg",
          "timezone_name": "America/New_York",
          "total_launch_count": 932,
          "total_landing_count": 45
        },
        "country_code": "USA",
        "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/pad_space_launch_complex_26a_20210830170946.jpg",
        "total_launch_count": 3,
        "orbital_launch_attempt_count": 3
      },
      "webcast_live": false,
      "image": null,
      "infographic": null,
      "program": [],
      "orbital_launch_attempt_count": 4,
      "location_launch_attempt_count": 2,
      "pad_launch_attempt_count": 1,
      "agency_launch_attempt_count": 1,
      "orbital_launch_attempt_count_year": 1,
      "location_launch_attempt_count_year": 1,
      "pad_launch_attempt_count_year": 1,
      "agency_launch_attempt_count_year": 1,
      "type": "normal"
    },
    {
      "id": "48bc7deb-b2e1-46c2-ab63-0ce00fbd192b",
      "url": "https://ll.thespacedevs.com/2.2.0/launch/48bc7deb-b2e1-46c2-ab63-0ce00fbd192b/",
      "slug": "vanguard-vanguard-2",
      "name": "Vanguard | Vanguard",
      "status": {
        "id": 4,
        "name": "Launch Failure",
        "abbrev": "Failure",
        "description": "Either the launch vehicle did not reach orbit, or the payload(s) failed to separate."
      },
      "last_updated": "2023-06-14T17:42:59Z",
      "net": "1958-02-05T07:33:00Z",
      "window_end": "1958-02-05T07:33:00Z",
      "window_start": "1958-02-05T07:33:00Z",
      "net_precision": null,
      "probability": null,
      "weather_concerns": null,
      "holdreason": null,
      "failreason": null,
      "hashtag": null,
      "launch_service_provider": {
        "id": 166,
        "url": "https://ll.thespacedevs.com/2.2.0/agencies/166/",
        "name": "US Navy",
        "type": "Government"
      },
      "rocket": {
        "id": 3007,
        "configuration": {
          "id": 449,
          "url": "https://ll.thespacedevs.com/2.2.0/config/launcher/449/",
          "name": "Vanguard",
          "family": "Vanguard",
          "full_name": "Vanguard",
          "variant": ""
        }
      },
      "mission": {
        "id": 1432,
        "name": "Vanguard",
        "description": "Small satellite used to test the Vanguard three-stage launch vehicle.",
        "launch_designator": null,
        "type": "Test Flight",
        "orbit": {
          "id": 8,
          "name": "Low Earth Orbit",
          "abbrev": "LEO"
        },
        "agencies": [],
        "info_urls": [],
        "vid_urls": []
      },
      "pad": {
        "id": 118,
        "url": "https://ll.thespacedevs.com/2.2.0/pad/118/",
        "agency_id": 166,
        "name": "Launch Complex 18A",
        "description": null,
        "info_url": null,
        "wiki_url": "https://en.wikipedia.org/wiki/Cape_Canaveral_Launch_Complex_18",
        "map_url": "https://www.google.com/maps?q=28.4493,-80.564494",
        "latitude": "28.4493",
        "longitude": "-80.564494",
        "location": {
          "id": 12,
          "url": "https://ll.thespacedevs.com/2.2.0/location/12/",
          "name": "Cape Canaveral, FL, USA",
          "country_code": "USA",
          "description": null,
          "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/location_12_20200803142519.jpg",
          "timezone_name": "America/New_York",
          "total_launch_count": 932,
          "total_landing_count": 45
        },
        "country_code": "USA",
        "map_image": "https://spacelaunchnow-prod-east.nyc3.digitaloceanspaces.com/media/launch_images/pad_118_20200803143338.jpg",
        "total_launch_count": 18,
        "orbital_launch_attempt_count": 11
      },
      "webcast_live": false,
      "image": null,
      "infographic": null,
      "program": [],
      "orbital_launch_attempt_count": 5,
      "location_launch_attempt_count": 3,
      "pad_launch_attempt_count": 2,
      "agency_launch_attempt_count": 2,
      "orbital_launch_attempt_count_year": 2,
      "location_launch_attempt_count_year": 2,
      "pad_launch_attempt_count_year": 1,
      "agency_launch_attempt_count_year": 1,
      "type": "normal"
    }
  ]
}
 function testSpaceLaunches(data){
  console.log(data.results[2]['image'])
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

fetchNewsArticles()
testSpaceLaunches(data)
})