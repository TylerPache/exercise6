<!DOCTYPE html>

<html lang="en">

<!-- Tyler Pache -->
<!-- 2/27/2019 -->
<!-- ISTE240 Excercise 6 -->

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/exer6.css">

    <title>Exercise 6</title>
</head>


<body>

    <div style="border-bottom: 10px solid black;">
        <h2>JavaScript Exercise 6a </h2>
        <p id="text">This line of text will move 10 pixels to the right.</p>

        <button onclick="moveText()" style="margin-bottom: 5px;">Move Text</button>
    </div>

    <div style="border-bottom: 10px solid black;">
        <h2>JavaScript Exercise 6b </h2>
        <form id="regForm">
            First name: <input type="text" id="fname" value="Boo"><br>
            Last name: <input type="text" id="lname" value="Radley"><br>
            <input type="checkbox" id="dog">I have a dog. (Check if you do)<br>
            <input type="text" id="major" placeholder="Enter your major"><br>
            <input type="button" onclick="count();" value="Submit" style="margin-bottom: 5px;">
        </form>
    </div>


    <div id="colorForm" style="border-bottom: 10px solid black;">
        <h2>JavaScript Exercise 6c</h2>
        <form>
            <select id="colorSelect">
                <option>Red</option>
                <option>Green</option>
                <option>Blue</option>
                <option>Yellow</option>
                <option>Orange</option>
                <option>Purple</option>
            </select>
            <input type="button" onclick="colorChange()" value="Change the Color" style="margin-bottom: 5px;">
        </form>
    </div>


    <div style="border-bottom: 10px solid black;">
        <h2>JavaScript Exercise 6d </h2>

        <div>
            <p id="rb" onmouseover="mouseOver()" onmouseout="mouseOut()">This sentence will turn the color you selected in 6c.</p>
        </div>
    </div>


    <div style="border-bottom: 10px solid black;">
        <h2>JavaScript Exercise 6e </h2>
        <form>
            <input type="text" id="firstoperand" placeholder="First Operand" /><br>
            <input type="text" id="secondoperand" placeholder="Second Operand" /><br>
            <input type="button" onclick="divide()" value="Divide" />
            <input type="button" onclick="multiply()" value="Multiply" />
            <p>The answer: <span id="result"></span></p>
        </form>
    </div>

    <div id="end">
        <?php
        $filename = 'exer6.php';
        include "assets/include/ending.php";
    ?>
    </div>
    <script src="assets/js/exer6.js"></script>
</body>

</html>
