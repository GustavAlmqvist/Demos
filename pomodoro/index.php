<style>
    #container {
        margin: auto;
        margin-top: 200px;
        text-align: center;
        background-color: beige;
        height: 200px;
        width: 700px;
        border: 3px solid black;
        border-radius: 10px;

        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(3, 1fr);
    }

    .btn {
        padding: 10px;
        background-color: gray;
        border: 2px solid black;
        color: white;
        width: 100px;
        cursor: pointer;
        border-radius: 10px;

        align-self: center;
        justify-self: center;
    }

    .label {
        align-self: center;
        justify-self: center;
        font-size: 25px;
        font-weight: bold;
    }

    #timer {
        grid-area: 1 / 2 / 1 / 2;
    }

    #break {
        grid-area: 1 / 4 / 1 / 4;
    }

    #round {
        grid-area: 1 / 3 / 1 / 3;
    }

    .timer {
        display: flex;
        align-self: center;
        justify-self: center;

        font-size: 25px;
        font-weight: bold;
    }

    #rounds {
        grid-area: 2 / 3 / 2 / 3;
        color: green;
    }

    #work-timer {
        grid-area: 2 / 2 / 2 / 2;
    }

    #break-timer {
        grid-area: 2 / 4 / 2 / 4;
    }

    #start {
        grid-area: 3 / 2 / 3 / 2;
    }

    #reset {
        grid-area: 3 / 3 / 3 / 3;
    }

    #pause {
        grid-area: 3 / 4 / 3 / 4;
    }
</style>
<audio id="beepAudio"></audio>
<div id="container">
    <p id="timer" class="label">Timer:</p>
    <p id="break" class="label">Break:</p>
    <p id="round" class="label">Rounds:</p>

    <!-- Timer -->
    <div id="work-timer" class="timer">
        <p id="w_minutes">25</p>
        <p class="semicolon">:</p>
        <p id="w_seconds">00</p>
    </div>

    <!-- Rounds -->
    <p id="rounds" class="timer">0</p>

    <!-- Break -->
    <div id="break-timer" class="timer">
        <p id="b_minutes">5</p>
        <p class="semicolon">:</p>
        <p id="b_seconds">00</p>
    </div>

    <button id="start" class="btn">Start</button>
    <button id="pause" class="btn">Pause</button>
    <button id="reset" class="btn">Reset</button>

</div>

<script>
    var start = document.getElementById('start');
    var pause = document.getElementById('pause');
    var reset = document.getElementById('reset');

    var workm = document.getElementById('w_minutes');
    var works = document.getElementById('w_seconds');
    var breakm = document.getElementById('b_minutes');
    var breaks = document.getElementById('b_seconds');

    var startTimer;

    document.getElementById("beepAudio").src = "http://soundbible.com/grab.php?id=1252&type=mp3";
    document.getElementById("beepAudio").load();

    //Timer function
    function timer() {
        //Work timer
        if (works.innerText != 0) {
            works.innerText -= 1;
        } else if (workm.innerText != 0 && works.innerText == 0) {
            works.innerText = 59;
            workm.innerText -= 1;
        }
        //Break timer
        if (workm.innerText == 0 && works.innerText == 0) {
            if (breaks.innerText != 0) {
                breaks.innerText -= 1;
            } else if (breakm.innerText != 0 && breaks.innerText == 0) {
                breaks.innerText = 59;
                breakm.innerText -= 1;
            }
        }
        //Counter
        if (workm.innerText == 0 && works.innerText == 0 && breakm.innerText == 0 && breaks.innerText == 0) {
            document.getElementById("beepAudio").play();
            workm.innerText = 25;
            works.innerText = "00";

            breakm.innerText = 5;
            breaks.innerText = "00";

            document.getElementById('rounds').innerText++;
        }
        //Play sound
        if (workm.innerText == 0 && works.innerText == 0 && breakm.innerText == 4 && breaks.innerText == 59){
            document.getElementById("beepAudio").play();
        }
    }

    //Stop timer function
    function stopTimer() {
        clearInterval(startTimer);
    }

    start.addEventListener("click", function() {
        if (startTimer === undefined) {
            startTimer = setInterval(timer, 1000)
        } else {
            alert("It's already running!");
        }
    })

    reset.addEventListener("click", function() {
        workm.innerText = 25;
        works.innerText = "00";

        breakm.innerText = 5;
        breaks.innerText = "00";

        document.getElementById("rounds").innerText = 0;
        stopTimer()
        startTimer = undefined;
    })

    pause.addEventListener("click", function() {
        stopTimer()
        startTimer = undefined;
    })
</script>