function convert() {
    let resultContainer = document.getElementById('resultContainer');
    const inputValue = document.getElementById('inputValue').value;
    const selectedItem = document.getElementById('selectedItem');

    if (selectedItem.value == 1) {
        decToBin(inputValue, resultContainer);
    } else {
        binToDec(inputValue, resultContainer);
    }
}
function changePlaceholder() {
    const itemValue = document.getElementById('selectedItem');
    if (itemValue.value == 1) {
        document.getElementById("inputValue").placeholder = "Enter a decimal number";
    } else {
        document.getElementById("inputValue").placeholder = "Enter a binary number";
    }
}

function decToBin(inputValue, resultContainer) {
    let binaryNumber = [];
    let i = 0;
    while (inputValue >= 0) {
        binaryNumber[i] = inputValue % 2;
        inputValue = Math.floor(inputValue / 2);
        i++;

        if (inputValue == 0) {
            break;
        }
    }
    resultContainer.innerHTML = binaryNumber.reverse().join('');
}

function binToDec(inputValue, resultContainer) {
    let decimalValue = 0, i = 0, remainder;
    while (inputValue != 0) {
        remainder = inputValue % 10;
        inputValue = Math.floor(inputValue / 10);
        decimalValue += remainder * Math.pow(2, i);
        i++;
    }
    resultContainer.innerHTML = decimalValue;
}