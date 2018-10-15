/* När webbsidan laddats klart kör start () */
window.onload = start;

/* Globala variabler */
var slumptal;
const elementInput = document.querySelector('input');
const elementP = document.querySelector('p');

/* Startdelen
1. Skapar ett slumptal mellan 1 och 100
*/
function start() {
    slumptal = Math.ceil(Math.random() * 100);
    console.log(slumptal);
}


/* Klickdelen 
1. Läs av gissningen 
2. Kolla om gissning = slumptal: "Korrekt!"
3. Kolla om gissning < slumptal: "För Lågt!"
3. Kolla om gissning > slumptal: "För Högt!"
*/
function klick() {
    var gissning = elementInput.value;
    console.log(gissning);

    if (gissning == slumptal) {
        console.log("Korrekt!");
        elementP.textContent = "Korrekt!";
    }

    if (gissning < slumptal) {
        console.log("För Lågt! Försök igen");
        elementP.textContent = "För Lågt! Försök igen";
    }
    if (gissning > slumptal) {
        console.log("För Högt! Försök igen");
        elementP.textContent = "För Högt! Försök igen";
    }
}