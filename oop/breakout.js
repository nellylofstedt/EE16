window.onload = start;

function start() {
    const canvas = document.querySelector("#myCanvas");
    var ctx = canvas.getContext("2d");

    var bollX, bollY, racketX, racketY, points, lives;
    racketX = 10;
    racketY = 100;
    points = 0;
    lives = 3;

    function reset() {
        bollX = 50;
        bollY = Math.ceil(Math.random() * 100);
        dx = 5;
        dy = 5; 
    }

    function boll(x, y) {
        /* Ansikte */
        ctx.beginPath();
        ctx.arc(x, y, 20, 0, Math.PI * 2, false);
        ctx.fillStyle = "yellow";
        ctx.fill();
        ctx.rect(100, 170, 300, 50);
        ctx.closePath();
    }

    function racket(x, y) {
    ctx.beginPath();
    ctx.rect(x, y, 7, 70);
    ctx.fillStyle = "#FF0000";
    ctx.fill();
    ctx.closePath();
    }

    function highscore(points) {
        ctx.font = "16px Arial";
        ctx.fillStyle = "#FFF";
        ctx.fillText("Points: " + points, 600, 50);
        ctx.fillText("Lives: " + lives, 600, 100);
    }

    document.addEventListener("keydown", flyttaRacket);
    function flyttaRacket(e) {
        console.log("flyttaRacket");
        if (e.key == "ArrowUp") {
            if (racketY > 10) {
                racketY -= 25;
            }
    
        }       
        if (e.key == "ArrowDown") {
            if (racketY < 520) {
                racketY += 25;
            }
        }  
        console.log("racketY = " + racketY);
        
    }


/* animationsloopen */
    reset();

    function loop() {
    /* sudda bort allt */
        ctx.clearRect(0, 0, 800, 600);
        
    /* boll */
        boll(bollX, bollY);
        bollX += dx;
        bollY -= dy;


        if (bollY <= 0) {
            dy = -dy;
        }
        if (bollX >= 800) {
            dx = -dx;
        }
        if (bollY >= 600) {
            dy = -dy;
        }
        if (bollX <= 0) {
            dx = -dx;
        }

        racket(racketX, racketY);  
        
        if (bollX <= 40) {
            if ((bollY >= racketY - 20) && (bollY <= (racketY + 90))) {
                dx = -dx;
                points += 10;
        
            } else {
                if (lives == 0) {
                    alert("Game over!");
                } else {
                    reset();
                    lives--;
                }
            }
        }
        highscore(points, lives);
        requestAnimationFrame(loop);
    }

    loop();
}