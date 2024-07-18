<?php

// 1.1 Clean your room Exercise 

$room_is_filthy = true;

if ($room_is_filthy == true) {
    echo "Yuk, Room is dirty : let's clean it up !";
    // cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0];

if ($room_filthiness == "health hazard" /* index 0*/) {
    echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if ($room_filthiness == "filthy" /* index 1*/) {
    echo "<br>Yuk, Room is filthy : let's BURN it up !";
} else if ($room_filthiness == "dirty" /* index 2*/) {
    echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if ($room_filthiness == "clean" /* index 3*/) {
    echo "<br>Room is clean : let's clean it up MORE!";
} else {
    echo "<br>Nothing to do, room is neat.";
}

// 2. Display a different greeting message depending on the time of the day.
/*
Write a script that implements these specifications :
    
    If the time is between 05h00 and 09h00, display "Good morning !".
    If the time is between 09h01 and 12h00, display "Good day !".
    If the time is between 12h01 and 16h00, display "Good afternoon !".
    If the time is between 16h01 and 21h00, display "Good evening !".
    If the time is between 21h01 and 04h59, display "Good night !".
    
*/

$nowMin = date("i"); // How to get the current time in PHP ? Google is your friend ;-)
$nowHour = date("h"); // How to get the current time in PHP ? Google is your friend ;-)
echo "<br>$nowMin";
echo "<br>$nowHour";
// Test the value of $now and display the right message according to the specifications.
if ($nowHour >= 5 and $nowHour < 9) {
    echo "<br>Good morning !";
} else if ($nowHour >= 9 and $nowHour < 12) {
    echo "<br>Good Day ! ";
} else if ($nowHour >= 12 and $nowHour < 16) {
    echo "<br>Good afternoon ! ";
} else if ($nowHour >= 16 and $nowHour < 21) {
    echo "<br>Good afternoon ! ";
} else {
    echo "<br>Good night !";
};

// "School sucks!" Exercise
// Start a new form that would allow a (nasty) teacher to grade a student.

// It would display a different message according to the number annotated :

// note below 4 : "This work is really bad. What a dumb kid! "
// note between 5 and 9 : "This is not sufficient. More studying is required."
// note equals 10 : "barely enough!"
// note is 11, 12, 13 or 14 : "Not bad!"
// note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
// note is 19 or 20 : "Too good to be true : confront the cheater!"

// This is a simple condition with intervals [0-4],[5-9],[10],[11-14],[16-18][19-20]