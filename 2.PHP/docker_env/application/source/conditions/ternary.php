<!-- 10. Ternary exercises
In a new file ternary.php declare a $hello variable which value is a greeting message. That greeting message depends on another variable $gender, which can either be "M" or "F". Finish by displaying the resulting message.
In a new file unicorn.php, create an html form asking "Are you a human, a cat or a unicorn ?". When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (you can find gifs here). Use GET or POST as method, whichever you like. Use a ternary operation to evaluate the condition.
Done ? Bravo, you now know plenty enough on how to write conditions. The rest is practice... Here is a well-deserved gif! -->

<?php
$hello = "This is a gretting";
$gender = "M"; // displays "Hello mister"
// $gender = "F"; // displays "Hello miss"
$gretting = $hello ? $gender == "M" : $gender == "F";

if ($gretting == true) {
    echo "Hello mister";
} else {
    echo "Hello miss";
};
// This works but I'm not sure if it was what asked