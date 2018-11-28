window.onload = start;

function start() {
    /* Hur vi kontaktar webbtjänster */
    const url = "https://openexchangerates.org/api/latest.json";
    const appId = "95eca96d4fb64c8ba6e6ce9d5124636e";  
    
    /* Element vi behöver läsa av eller skriva till */
    const eBelopp = document.querySelector("#belopp");
    const eValuta = document.querySelector("#valuta");
    const eResultat = document.querySelector("#resultat");

    eValuta.addEventListener("change", vaxla);
    
    function vaxla() {
        let belopp = eBelopp.value;
        console.log(belopp);
        let valuta = eValuta.value;
        console.log(valuta);

        /* Skicka ajax anrop till webbtjänsten */
        let ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function () {
            if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
                let kurs = JSON.parse(this.responseText);
                console.log(kurs.rates[valuta]);
                eResultat.value = belopp * kurs.rates[valuta];
                
            }
        };
        ajax.open("GET", url + "?app_id=" + appId, true);
        ajax.send();
    }
}








