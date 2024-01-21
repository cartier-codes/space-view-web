export default function typewriter(inputText, id) {
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

