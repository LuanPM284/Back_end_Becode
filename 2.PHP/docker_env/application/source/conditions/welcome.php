<!-- 
 3. Display a different greeting according to the user's age.
Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.

Here is the user experience we aim for :
First, users see a form asking for their age :

Please type your age : __

When they submit the form, the page displays the right message:

if age is less than 12 years old, display "Hello kiddo!"
if age is between 12 and 18 years old, display "Hello Teenager !"
if age is between 18 and 115 years old, display Hello Adult !"
if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"
Have both the form and the processing script in the same file. Use the GET method.

Here is a headstart. -->
<!-- // 3. "Different greetings according to age" Exercise -->
<?php
$gender = ($_GET["gender"]);
$english = $_GET["english"];

if (isset($_GET['age'])) {
    // Form processing
    if ($_GET['age'] <= 12) {
        if ($english == "yes") {
            if ($gender == "male") {
                echo "Hello mister kiddo!";
            } else {
                echo "Hello miss kiddo!";
            };
        } else {
            if ($gender == "male") {
                echo "Aloha boy !";
            } else {
                echo "Aloha girl !";
            };
        };
    } else if ($_GET['age'] > 12 and $_GET['age'] <= 18) {
        if ($gender == "male") {
            echo "Hello mister Teenager !";
        } else {
            echo "Hello miss Teenager !";
        };
    } else if ($_GET['age'] > 18 and $_GET['age'] <= 115) {
        if ($gender == "male") {
            echo "Hello mister Adult !";
        } else {
            echo "Hello miss Adult !";
        };
    } else {
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    };
};
?>
<!-- 
3. Display a different greeting according to the user's age and gender.
Improve the previous form to add another question: "Man or Woman?". Use an input of type radio to capture the data.

If gender is "Woman", the displayed message should be adapted accordingly.

For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".

Do the same for all the other age ranges.

Tip: You can nest conditional structures inside others. -->

<!-- 4. Display a different greeting according to the user's age, gender and mothertongue.
Improve the previous form to add yet another question: "Do you speak English ? ". Use an input of type radio to capture the data. Possible answers: "yes" or "no".

Then modify your form processing script to implement this :

If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.
If the answer is "no", display "Aloha boy" or "Aloha Girl"
Adapt all the other answers accordingly, using "Aloha" instead of "Hello". -->