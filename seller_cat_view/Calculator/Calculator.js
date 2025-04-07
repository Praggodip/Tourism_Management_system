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
    if (resultDisplay.innerHTML.length > 1) {
        resultDisplay.innerHTML = resultDisplay.innerHTML.slice(0, -1);
    } else {
        resultDisplay.innerHTML = "0";
    }
}
 
function calculateResult() {
    try {
        resultDisplay.innerHTML = eval(resultDisplay.innerHTML);
    } catch {
        resultDisplay.innerHTML = "Error";
    }
}
 
 