/* 
1. Skapa js-grunden
2. Skapa canvas
3. Skapa funktionen gameLoop
4. Skapa funktionen reset
5. Skapa variabler : map[array], character, array keys 
6. Skapa labyrinten
7. Rita ut labyrinten
*/
window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var map = [];
    var spelare = { x: 0, y: 0 };
    var monster = { x: 0, y: 0 };

    var imgSpelare = new Image();
    imgSpelare.src = "./847b43f96d37b7d8c2ec49d2c70f9b94.png";
    var imgMonster = new Image();
    imgMonster.src = "./10d5884314079f0b88560a0c53d26046.png";

    map = [
        [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1],
        [1, 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1],
        [1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1],
        [1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1],
        [1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 0, 1, 1],
        [1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1],
        [1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1],
        [1, 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 1],
        [1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1],
        [1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 1],
        [1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1]
    ];

    function reset() {
        spelare.x = 1;
        spelare.y = 1;

        monster.x = 10;
        monster.y = 10;
    }  
    function ritaMonster(x, y) {
        ctx.beginPath();
        ctx.drawImage(imgMonster, x * 45, y * 45, 45, 45);
        ctx.closePath();
    }
    function uppdateraMonster() {
        monster.x += Math.ceil(Math.random() * 3 - 2);
        monster.y += Math.ceil(Math.random() * 3 - 2);

        if (monster.x < 0) {
            monster.x = 11;
        }
        if (monster.x > 11) {
            monster.x = 0;
        }
        if (monster.y < 0) {
            monster.y = 11;
        }
        if (monster.y > 11) {
            monster.y = 0;
        }
    }
    setInterval(uppdateraMonster, 200);

    function ritaKloss(x, y) {
        ctx.beginPath();
        ctx.rect(x, y, 45, 45);
        ctx.fillStyle = "#000";
        ctx.fill();
        ctx.closePath();
    }
    function ritaSpelare(x, y) {
        ctx.beginPath();
        ctx.drawImage(imgSpelare, x * 45, y * 45, 45, 45);
        ctx.closePath();
    }
    function ritaLabyrint() {
        /* Rita ut labyrinten */
        for (var j = 0; j < 13; j++) {
            for (var i = 0; i < 13; i++) {
                if (map[j][i] == 1) {
                    ritaKloss(i * 45,j * 45);
                }
            }            
        }
    }
    function dead() {
        if (monster.x == spelare.x && monster.y == spelare.y) {
            alert("Game over!");
        }
    }


    /* Lyssna på piltantagenterna */
    document.addEventListener("keydown", uppdateraSpelaren);

    function uppdateraSpelaren(e) {
        var gamlaX = spelare.x;
        var gamlaY = spelare.y;

        if (e.key == "ArrowLeft") {
            spelare.x -= 1;
        }
        if (e.key == "ArrowRight") {
            spelare.x += 1;
        }
        if (e.key == "ArrowUp") {
            spelare.y -= 1;
        }
        if (e.key == "ArrowDown") {
            spelare.y += 1;
        }

        if (map[spelare.y][spelare.x] == 1) {
            spelare.x = gamlaX;
            spelare.y = gamlaY;
        }
    }

    reset();

    function gameLoop() {
        ctx.clearRect(0, 0, 800, 600); 

        ritaLabyrint();
        ritaSpelare(spelare.x, spelare.y);
        ritaMonster(monster.x, monster.y);
        dead();

        requestAnimationFrame(gameLoop);
    }
    gameLoop();
}