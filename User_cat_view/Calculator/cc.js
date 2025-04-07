let resultDisplay = document.getElementById("result");


function appendValue(value) {
    if (resultDisplay.innerHTML === "0") {
        resultDisplay.innerHTML = value;
    } else {
        resultDisplay.innerHTML += value;
    }
}


function clearScreen() {
    resultDisplay.innerHTML = "0";
}

function deleteLast() {
    let current = resultDisplay.innerHTML;
    if (current.length > 1) {
        resultDisplay.innerHTML = current.slice(0, -1);
    } else {
        resultDisplay.innerHTML = "0";
    }
}

function calculateResult() {
    let expression = resultDisplay.innerHTML;
    let tokens = expression.match(/(\d+\.?\d*|\+|\-|\*|\/)/g);

    if (!tokens) {
        resultDisplay.innerHTML = "Error";
        return;
    }

    let result = parseFloat(tokens[0]);

    for (let i = 1; i < tokens.length; i += 2) {
        let operator = tokens[i];
        let nextNumber = parseFloat(tokens[i + 1]);

        if (isNaN(nextNumber)) {
            resultDisplay.innerHTML = "Error";
            return;
        }

        switch (operator) {
            case "+":
                result += nextNumber;
                break;
            case "-":
                result -= nextNumber;
                break;
            case "*":
                result *= nextNumber;
                break;
            case "/":
                result /= nextNumber;
                break;
            default:
                resultDisplay.innerHTML = "Error";
                return;
        }
    }

    resultDisplay.innerHTML = result;
}
