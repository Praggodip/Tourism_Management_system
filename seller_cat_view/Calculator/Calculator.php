<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="Calculator.css">
    

</head>
<body>
    <div class="calculator">
        <div class="display">
            <p id="result">0</p>
        </div>
        <div class="buttons">
            <button class="operator" onclick="clearScreen()">AC</button>
            <button class="operator" onclick="deleteLast()">DEL</button>
            <button class="operator" onclick="appendValue('%')">%</button>
            <button class="operator" onclick="appendValue('+')">+</button>

            <button onclick="appendValue('7')">7</button>
            <button onclick="appendValue('8')">8</button>
            <button onclick="appendValue('9')">9</button>
            <button class="operator" onclick="appendValue('-')">-</button>

            <button onclick="appendValue('4')">4</button>
            <button onclick="appendValue('5')">5</button>
            <button onclick="appendValue('6')">6</button>
            <button class="operator" onclick="appendValue('*')">×</button>

            <button onclick="appendValue('3')">3</button>
            <button onclick="appendValue('2')">2</button>
            <button onclick="appendValue('1')">1</button>
            <button class="operator" onclick="appendValue('/')">÷</button>

            <button onclick="appendValue('0')">0</button>
            <button onclick="appendValue('.')">.</button>
            <button class="equals" onclick="calculateResult()">=</button>
        </div>
    </div>
    <script src="Calculator.js"></script>
</body>
</html>