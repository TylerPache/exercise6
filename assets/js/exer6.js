/* Tyler Pache
 ** 3/24/2019
 ** ISTE 240 Exercise6 - js
 */

// exercise 6a
var moveRight = 0;

function moveText() {
    var text = document.getElementById('text');
    moveRight += 10;
    text.style.marginLeft = moveRight + 'px';
}

// exercise 6b 
function count() {
    var inputElements = document.getElementById('regForm').getElementsByTagName('input');
    var inputCount = inputElements.length;
    var textCount = 0;

    for (var i = 0; i < inputCount; i++) {
        if (inputElements[i].type === "text") {
            textCount = textCount + 1;
        }
    }
    alert("Number of total inputs: " + inputCount + "\nNumber of inputs of type 'text': " + textCount);
}

// exercise 6c

var color;


function colorChange() {
    var selections = document.getElementById('colorSelect');
    var options = selections.getElementsByTagName('option');
    var optionsCount = options.length;

    for (var i = 0; i < optionsCount; i++) {
        if (options[i].selected === true) {
            color = (options[i].innerHTML);
            document.getElementById('colorForm').style.backgroundColor = color;
        }
    }
}

// exercise 6d
function mouseOver() {
    document.getElementById('rb').style.color = color;
}

function mouseOut() {
    document.getElementById('rb').style.color = "black";
}

// exercise 6e
// multiply function
function multiply() {
    var x = parseInt(document.getElementById("firstoperand").value);
    var y = parseInt(document.getElementById("secondoperand").value);
    var product = x * y;
    var textNode = document.createTextNode(product);
    document.getElementById("result").innerHTML = "";
    document.getElementById("result").appendChild(textNode);
}

//divide function
function divide() {
    var x = parseInt(document.getElementById("firstoperand").value);
    var y = parseInt(document.getElementById("secondoperand").value);
    var total = x / y;
    var textNode = document.createTextNode(total);
    document.getElementById("result").innerHTML = "";
    document.getElementById("result").appendChild(textNode);
}
