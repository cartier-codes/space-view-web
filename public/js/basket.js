document.addEventListener('DOMContentLoaded', () => {
  function fetchTotal(){
    const prices = document.querySelectorAll('.price');
    let val = 0;
    prices.forEach(price => {
      val += parseInt(price.innerHTML);
    });
    const total = document.querySelector('.total');
    total.innerHTML = val
  }

  fetch('../api/access_basket.php')
    .then((response) => response.json())
    .then(data => {
      if (data) {
        const parsedData = data.map((object) => JSON.parse(object));
        displayBasketData(parsedData);
      }
    })
    .catch((error) => {
      console.error(error);
      createNotification("Error", "There was an issue loading your basket");
    });

  class Notifications {
    constructor(el) {
      this.el = el;
    }

    createDiv(className = "") {
      const el = document.createElement("div");
      el.classList.add(className);
      return el;
    }

    addText(el, text) {
      el.appendChild(document.createTextNode(text));
    }

    create(
      title = "Untitled notification",
      description = "",
      duration = 2,
      destroyOnClick = false,
      clickFunction = undefined
    ) {
      function destroy(animate) {
        if (animate) {
          notiEl.classList.add("out");
          notiEl.addEventListener("animationend", () => { notiEl.remove(); });
        } else {
          notiEl.remove();
        }
      }

      const notiEl = this.createDiv("noti");
      const notiCardEl = this.createDiv("noticard");
      const glowEl = this.createDiv("notiglow");
      const borderEl = this.createDiv("notiborderglow");

      const titleEl = this.createDiv("notititle");
      this.addText(titleEl, title);

      const descriptionEl = this.createDiv("notidesc");
      this.addText(descriptionEl, description);

      notiEl.appendChild(notiCardEl);
      notiCardEl.appendChild(glowEl);
      notiCardEl.appendChild(borderEl);
      notiCardEl.appendChild(titleEl);
      notiCardEl.appendChild(descriptionEl);

      this.el.appendChild(notiEl);

      console.log("height", notiCardEl.scrollHeight);
      requestAnimationFrame(function () {
        notiEl.style.height = "calc(0.25rem + " + notiCardEl.getBoundingClientRect().height + "px)";
      });

      notiEl.addEventListener("mousemove", (event) => {
        const rect = notiCardEl.getBoundingClientRect();
        const localX = (event.clientX - rect.left) / rect.width;
        const localY = (event.clientY - rect.top) / rect.height;

        console.log(localX, localY);
        glowEl.style.left = localX * 100 + "%";
        glowEl.style.top = localY * 100 + "%";

        borderEl.style.left = localX * 100 + "%";
        borderEl.style.top = localY * 100 + "%";
      });

      if (clickFunction !== undefined) {
        notiEl.addEventListener("click", clickFunction);
      }

      if (destroyOnClick) {
        notiEl.addEventListener("click", () => destroy(true));
      }

      if (duration !== 0) {
        setTimeout(() => {
          notiEl.classList.add("out");
          notiEl.addEventListener("animationend", () => { notiEl.remove(); });
        }, duration * 1000);
      }
      return notiEl;
    }
  }

  let notis = new Notifications(document.querySelector(".notifications"));

  function createNotification(title, description) {
    notis.create(title, description, 5, true);
  }

  function displayBasketData(data) {
    const container = document.querySelector('.parent-container');
    data.forEach(element => {
      let card = document.createElement('div');
      card.classList.add('card');
      let image = document.createElement('img');
      image.classList.add('planetImage');
      image.src = `/space-view/public/${element.stillImg}`;
      let title = document.createElement('h3');
      title.classList.add('title');
      title.innerHTML = element.name.toUpperCase() + ' TOUR';
      let price = document.createElement('h3');
      price.classList.add('price');
      price.innerHTML = element.pricing;
      let removeButton = document.createElement('button');
      removeButton.id = "removeButton"

      card.appendChild(image);
      card.appendChild(title);
      card.appendChild(price);
      card.appendChild(removeButton)
      container.appendChild(card);
    });
    
    setInterval(fetchTotal,300)
    
  }
});
