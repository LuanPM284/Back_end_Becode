<!-- // "School sucks!" Exercise
// Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!"
-->
<?php
$grade = $_GET["grade"];

// if ($grade <= 4) {
//     echo "This work is really bad. What a dumb kid!";
// } else if ($grade == 5) {
//     echo "This is not sufficient. More studying is required.";
// } else if ($grade == 6) {
//     echo "This is not sufficient. More studying is required.";
// } else if ($grade == 7) {
//     echo "This is not sufficient. More studying is required.";
// } else if ($grade == 8) {
//     echo "This is not sufficient. More studying is required.";
// } else if ($grade == 10) {
//     echo "This is not sufficient. More studying is required.";
// } else if ($grade == 10) {
//     echo "Not bad!";
// } else if ($grade == 11) {
//     echo "Not bad!";
// } else if ($grade == 12) {
//     echo "Not bad!";
// } else if ($grade == 13) {
//     echo "Not bad!";
// } else if ($grade == 14) {
//     echo "Not bad!";
// } else if ($grade == 15) {
//     echo "Bravo, bravissimo!";
// } else if ($grade == 16) {
//     echo "Bravo, bravissimo!";
// } else if ($grade == 17) {
//     echo "Bravo, bravissimo!";
// } else if ($grade == 18) {
//     echo "Bravo, bravissimo!";
// } else {
//     echo "Too good to be true : confront the cheater!";
// };

// 8. The "Switch" structure.

// switch $weather {
//     case 'rain':
// 		echo "Take an umbrella";
// 		break;
//         case 'storm':
//             echo "Don't get out today!";
//             break;
//             default:
//             echo "Weather will be ok to day";
//         }

switch ($grade) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "This work is really bad. What a dumb kid!";
        break;
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        echo "This is not sufficient. More studying is required.";
        break;
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
        echo "Not bad!";
        break;
    case 15:
    case 16:
    case 17:
    case 18:
        echo "Bravo, bravissimo!";
        break;
    default:
        echo "Too good to be true : confront the cheater!";
};
?>