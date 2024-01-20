

document.addEventListener('DOMContentLoaded', ()=>{
    let backward = document.getElementById('backward-effect');
    let triggerButton = document.getElementById('trigger-button');
    let titles = document.getElementById('titles')
    let ticketRow  = document.querySelector('.row')
    let titleData = document.getElementById('titleData');
    let sideTicketTitle = document.getElementById('side-ticket-title');
    let sideTicketMain = document.getElementById('side-ticket-main');
    let barcode = document.querySelector('.barcode');
    let warningpar  = document.getElementById('warning')

    function typewriter(inputText, id) {
        var i = 0;
        var speed = 50;
    
        function type() {
            if (i < inputText.length) {
                var char = inputText.charAt(i);
                if (char === '\n') {
                    document.getElementById(id).appendChild(document.createElement("br"));
                } else {
                    document.getElementById(id).innerHTML += char;
                }
                i++;
                setTimeout(type, speed);
            }
        }
    
        // Start the typing process
        type();
    }
    

    function perspectiveChange() {
        // Set the initial scale to 1
        backward.style.transform = 'scale(1)';
        backward.style.zIndex = 8;

        setTimeout(() => {
            let transform = 'scale(0.25)';
            backward.style.transform = transform;
        }, 500);

        setTimeout(() => {
            let transform = 'translateY(-1130px)';
            backward.style.transform += transform;
        }, 1400)
        setTimeout(() => {
            sideTicketMain.style.display = 'none'
            sideTicketTitle.style.display = 'none'
            barcode.style.display = 'none'
            warningpar.style.display = 'none';
            let transform = 'rotateZ(90deg)';
            backward.style.transform += transform;
        }, 2000);
        
        setTimeout(() => {
        backward.style.height = '350px';
        backward.style.width = '590px';
        }, 2800);

        setTimeout(() => {
            let transform = 'translateX(500px)';
            titles.style.transform = 'translateX(-100px)';
            titleData.style.transform = 'translateX(-100px)'
            ticketRow.style.transform = 'translateX(-100px)';
            barcode.style.transform = 'translateX(-100px)'
            warningpar.style.transform = 'translateX(-100px)';
            titles.style.scale = '0.6';
            titleData.style.scale = '0.6'
            ticketRow.style.scale = '0.5';
            backward.style.transform += transform;

        }, 3300)

        function ticket() {
            let ticketDiv = document.createElement('div');
            ticketDiv.className = 'ticket';
            triggerButton.style.visibility ='hidden'
            // Set opacity to 1 for fade-in effect
            setTimeout(() => {
                ticketDiv.style.opacity = 1;
            }, 100);

            setTimeout(() => {
                backward.style.backgroundColor='rgb(14,5,10)';
                titles.style.display = 'none';
                ticketRow.style.scale = '0.5';
                ticketRow.style.display = 'block';
                ticketRow.style.top = '-250px'
                titles.style.paddingTop= '50px'
                titles.style.display = 'block'
                ticketDiv.style.backgroundColor = 'white';
                ticketDiv.appendChild(titles)
                ticketDiv.appendChild(titleData)
                ticketDiv.appendChild(ticketRow)
                ticketRow.style.display = 'flex'
                backward.appendChild(ticketDiv);
                backward.style.zIndex = -1;
            }, 4200);

            // Show ticket machine after ticket is appended
        }

        setTimeout(ticket, 600);
        
    }


    triggerButton.addEventListener('click', function () {
        perspectiveChange();
        setTimeout(() => { backward.remove() }, 10000);
        setTimeout(() => typewriter("Ticket recieved... \n Processing...  \n Departure Station: EAR \n Destination Station: MER \n Departure Time: 2:00PM \n Seat Number: A12 \n Spacecraft: SC5735 \n Gate: 6A" , 'processTicket'), 8000);
        triggerButton.disabled = true;
    });
})
