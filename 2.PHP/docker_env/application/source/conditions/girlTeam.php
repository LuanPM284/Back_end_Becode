<!-- 5. The Girl Soccer team
You want to create a soccer team for girls between 21 and 40 years old.

Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message. -->
<!-- 
<?php
$age = $_GET["age"];
$gender = ($_GET["gender"]);
$name = $_GET["name"];
if (isset($_GET['age'])) {
    if ($gender == "female" && ($age >= 21 && $age < 40)) {
        echo "Welcome to the team, $name";
    } else {
        echo "Sorry, $name, you don't fit the criteria";
    };
};
?> 
-->

<!-- 6. Achieve the same, without the ELSE.
A key aspect of coding conditions is to keep them as simple as possible. Improve the previous exercise by using only an if statement (without the else), and a default value that changes only if the condition is true. -->
<?php
$age = $_GET["age"];
$gender = ($_GET["gender"]);
$notOnTeam = "Sorry you don't fit the criteria";
if ($gender == "female" && ($age >= 21 && $age < 40)) {
    $notOnTeam = "Welcome to the team! ";
};
echo $notOnTeam;
?>