export default function typewriter(inputText, id, speed = 50) {
        var i = 0;
        var speed = speed;
    
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

