/* När webbsidan laddats klart kör start() */
window.onload = start;

function start() {

    /* Anslut till elementen via behöver jobba med */
    const elementTable = document.querySelector('table');
    console.log(elementTable);

    const elementPlus = document.querySelector('#plus');
    console.log(elementPlus);

    const elementMinus = document.querySelector('#minus');
    console.log(elementMinus);

    const elementKop = document.querySelector('#kop');
    console.log(elementKop);

    const elementAntal = document.querySelector('#antal');

    const elementSumma = document.querySelector('#summa');

    const elementPris = document.querySelector('#pris');

    /* Lyssna på händelser */
    elementPlus.addEventListener('click', plus);
    elementMinus.addEventListener('click', minus);
    elementKop.addEventListener('click', kop);

    /* Lägg till ett antal */
    function plus() {
        /* Läs av antal */
        var antal = elementAntal.textContent;
        var pris = elementPris.textContent;

        /* Lägg till en */
        antal++;

        /* Rökna upp summan */
        summa = pris * antal;

        /* Skriva tillbaka */
        elementAntal.textContent = antal;
        elementSumma.textContent = summa;
    }

    /* Ta bort ett antal */
    function minus() {
        /* Läs av antal */
        var antal = elementAntal.textContent;
        
        /* Ta bort en */
        if (antal > 1) {
            antal--;
        }
        
        /* Skriva tillbaka */
       elementAntal.textContent = antal;
        
    }

    function kop() {
        /* Läs av korgen */
 
        var antal = elementAntal.textContent;

        /* Addera antal * summa */
        antal++;
        
                /* Skriva tillbaka */
        elementAntal.textContent = antal;
    }
}