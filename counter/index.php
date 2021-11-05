<style>
    button {
        padding: 10px;
        background-color: gray;
        border: 2px solid black;
        color: white;
        width: 100px;
        cursor: pointer;
        border-radius: 10px;
    }

    #centerpage {
        padding: 200px;
        text-align: center;
    }

    #counter {
        font-size: 50px;
        margin-bottom: 20px;
    }
</style>
<div id="centerpage">


    <div id="counter">
        0
    </div>
    <div class="buttons">
        <button id="increase">+1</button>
        <button id="reset">Reset</button>
        <button id="decrease">-1</button>
    </div>

</div>
<script>
    const counter = document.getElementById('counter')
    const increaseBtn = document.getElementById('increase')
    const resetBtn = document.getElementById('reset')
    const decreaseBtn = document.getElementById('decrease')

    let counterValue = 0;
    increaseBtn.addEventListener("click", function(event) {
        counterValue += 1;
        counter.innerHTML = counterValue;
    });
    resetBtn.addEventListener("click", function(event) {
        counterValue = 0;
        counter.innerHTML = counterValue;
    });
    decreaseBtn.addEventListener("click", function(event) {
        counterValue -= 1;
        counter.innerHTML = counterValue;
    });
</script>