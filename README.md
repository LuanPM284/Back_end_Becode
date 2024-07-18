# Back_end_Becode
A testing site for learning PHP

## Personal Note

Docker install went well using the [env](https://github.com/becodeorg/Swartz-9/tree/main/2.The-Hill/2.PHP/docker_env) provided by Becode

After installing Docker on my machine I could open a terminal on the right directory and run the follwing command to mount the container:

`docker-compose up`

If I ever want to modify something(and I might since it's not up to date) I can go to the `docker-compose.yml`.

For the small exercices I opened `index.php` using vscode and added a `echo 'Hello!'`

The image was done by adding an HTML tag after `echo`, like the following.

The link to another `.php` file is added by an anchor tag and liking to the said page.

```PHP
<?php
	echo "Hello!";
	echo "Hello! Twice";
// phpinfo();
echo ' 
<!DOCTYPE>
<html>
<a href="/cats.php">Cats</a>
<a href="/index.php">index</a>
<img src="https://i0.wp.com/backofficethinking.com/wp-content/uploads/2023/01/cute-kitten.jpg?resize=768%2C657&ssl=1" title="Cat open-source" alt="image of a orange kitten" />
</html>
';
?>
```

### 00 Variables

We assign a varaible starting with `$` and give it a value with an `=`
```PHP
$variable_name = "This is the variable's value"; // string
$us_president = 'Donald Trump'; // string
$birth_year = 1973; // int
$is_raining = false; //bool
$team_players = array('Jean','Jeanne','Dirk');// list
```

To open the variable folder I had to put it inside the source on provided by the docker folder.

Here is the code to create an HTML that will display the correct name:

```HTML
<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
  </body>
</html>
```
Notice the `<?php?>` that will take the following values and insert on the correct places:

```HTML
http://localhost:80/variable/humans.php?name=Alexandre
http://localhost:80/variable/humans.php?name=Pierre
http://localhost:80/variable/humans.php?name=Jennifer

```
On the code we create a condition `if(){}` using `isset`, literally (is set) we can check if a variable is different from null, so if it is valid. 

From that we get the value given by `name` variable from the http.

`$_GET['name']` Here the variable inside name will be retrieved.

The steps are, verify that the variable exits, if true, enter the conditional and show the value of the variable on the HTML page.

Rules for PHP variables:

- A variable starts with the $ sign, followed by the name of the variable
- The dollar must then be followed with either a letter or the underscore _ character, not a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ( $age, $Age and $AGE are three different variables)

Types: string,int,float,bool,NULL,array (key => value) index at 0
```PHP
$message = "I need pizza !";
$total = 42 + 4 ;
$total = 42 + 4.34543;
$is_old_enough_to_vote = true;
$donald_trump_humanity = NULL;
$team = array(
  0 => 'Cindy', 
  1 => 'Jean', 
  2 => 'Mustapha', 
  3 => 'Pierre', 
  4 => '', 
  5=>'Eric'); 
```
**Exercices**
Create a file called variable_types.php and try to do this:

1. Store your first name in a variable, then display its value (echo) in a <p> html tag so that the screen shows:
    Hi! My name is ______.

2. Then add another variable to contain your age, then display it in a second <p> tag :
    I am ____ years old.

3. Then add yet another variable that describes the colour of your eyes, then display it in another <p> tag :
    My eyes are ____

4. Then add yet another variable that contains the name of all the people in your family. What type of variable would you use for that ?
5. Display the value stored at the first index in another <p> tag :
    The first person in my family is ____

6. And finally : what type of variable would you use to store the information whether you are hungry or not ?

Answer:

```PHP
<html>
<body>
    <?php
$name = "Luan";
$age = 27;
$eye_color = "brown";
$family = ['Father','Mother','Brother 1','Brother 2','Brother 3','doggy'];
$other = array(
    0 => "test",
    1 => "test2"
);
$hungry = true;
?>
<p>Hi my name is <?php echo $name?>.</p>
<p>I am <?php echo $age?> years old.</p>
<p>My eyes are <?php echo $eye_color?>.</p>
<p>The first person in my family is <?php echo $family[1]?>.</p>
<p>The first person in my family is <?php echo $other[1]?>.</p>
<p>Hungry am I ? <?php echo $hungry ? 'true':'false'; ?>.</p>
</body>
</html>
```

### 01 Conditions

Syntax for PHP conditions:

```PHP
if( condition ) {
   // code to execute if the condition results TRUE
  echo "Yep, that's right.";
  echo "And I love being right!";
 } else {
   // code to execute if the condition results FALSE
   echo "Nah, it's not.";
   echo "Better luck next time :-( .";
 }
```

Operators for a condition:
- == : is the same as != : is different than
- \> : is greater than
- < : is smaller than
- \>= : is greater or equal to
- <= : is smaller or equal to

Example and exercice:

```PHP
if( $temperature > 21 ) {
   // code to execute if the condition results TRUE
   $clothes = "T-shirt";
   $should_i_wear_a_scarf = false;
 } else {
   // code to execute if the condition results FALSE
   $clothes = "Pull-over";
   $should_i_wear_a_scarf = true;
 }
 
 if ($should_i_wear_a_scarf == true){
	 // this is a "fake" function for the sake of the example 
	 // that function is only executed in the condition is true
	 grab_scarf_from_door_hanger();
 }
 // The following function will be executed everytime, 
 // but its $clothes argument changes according to the result
 // of our previous conditional structure
cover_my_chest_with($clothes);
 
```
Exercise:
- Change the condition so that it becomes: "if the temperature is greater or equal to 15 degrees".

`if($temperature >= 15){...}`

We also have `AND`, `OR` operators.

exe:
```PHP
if ( $age <= 12 AND $language == "English" ) { 
	echo "Hello kiddo!";
} else {
	echo "Good day stranger !";
}
```

Like other languages we can use conditions inside conditions:

`if(){ if(){...}...}`

exe:
```PHP
if ($gender == 'Female'){

	// Instructions here will be ran if gender is "Female"

	if ( $age <= 12 and $language == "English" ) {
		// Instructions here will be ran if gender is Female, age is below 13 and language is English.  
		...
	} else{
		// Instructions here will be ran if gender is Female, and age is above 12 or language is not English. 
		...
	}

} else {
	// Instructions here will be ran if gender is not "Female"

	if ( $age <= 12 and $language == "Chinese" ) {
		// Instructions here will be ran if gender is not Female, and if age is below 13 and language is Chinese. 
		...
	}
}

```

**Condition Drill**
Drill exercice: Conditional structures in PHP:

`/conditions/drill.php`

It was fun, my greatest difficulty here was to find the correct HTML tags and submits that would allow me to create variables and work with them. I knew about ternary but was not aware that PHP also had them.

My code doesn't seem the most efficient but it gets the job done.

### 02 Quizz
The following are my answers to this part of the PHP learning, maybe some personnal explantions.

PHP code must sit inside specific tags. Which one(s) ?
```PHP
<?php>...</?>
<script>...</script> 
<&>...</&> 
<?php...?>// This is the one I used during all other exercises
```
Which of the following variables do not have a valid name ?
```
myvar // this one doesn't have a $
$myvar
$var5
$_myvar
$_5var
$__élément1
$hotel4*
```
In which variable is stored the data sent via an html form using the GET method ?
```
In a superglobal variable $_GET
```

When submitting a form using the POST method, the variables values appear in the URL. True or False?
```
false, contrary to the get method
```
What is the difference between $a=$b and $a==$b ?
```
= variable a recieves values of b
== we compare both variables values
```
What character must be at the end of each line of php code ?
```
;
```
What will return this line: echo "Hello" + " World"; ? Why ?
```
an error since '+' is used for arithmetic and not concatenation
```
What is the right syntax :
```
- <?php echo Hello World; ?>
- <?php echo("Hello world"); ?>
- <?php echo "Hello World": ?>
- <?php echo 'Hello World'; ?> // this one respects the "" or '' and the ;
- <?= "Hello World"; ?>
```
What is the result of this script ? Why ?
```
$Hour = 15;
$hour = 3;
echo ($hour == $Hour) ? "yes": "not correct";
// this should give us "not correct" since 15 != 3 
```
What is the correct way to write comments in PHP ?
```PHP
// This is a comment // for a line
/* This is a comment */  // multiple lines
*/ This is a comment /*  // Not this one
# This is a comment // for one line too
```
What is the result of this script ? Why ?
```
$Hour = 15;
$hour = 3;
echo ($hour == $hour) ? "yes": "not correct";
// we will get "yes" since we compare 3 with 3 and they are the same
```
What is the name of this type of operator in the following example ?
```
echo ( $season == 'summer' ) ? "Go to the beach.": "Go skying.";
// the name is ternary
```
If the condition in the previous statement is true, where will we go ?
```
// To the beach!
```
What is the difference between :
```
- $a = 10; // a recieves the int value 10
- $a = "10"; // a recieves the string "10"
- $a = array(10); // a recieves an array with one value 10
// var_dump($a); for more details
```
What will the following return ?
```
$a = 10;  
$b = 2;  
echo $a + $b;
// 12  
```
And this one ?
```
$a = 10;  
$b = 2;  
echo $a * $b;
// 20  
```
And this one ?
```
$a = 10;  
$b = 2;  
echo $a - $b;
// 8  
```
And this one ? Why ?
```
$a = 10;  
$b = 2; 
echo $a . $b;  
// 102 since . is used for string concatenation
```
What will this script return at 10h23 AM ?
```
$hour = date('H');
if ($hour > 17){
	echo "Good evening!";
} elseif ($hour > 13){
	echo "Good afternoon!";
} else{
	echo "Hello!";
}
// Hello
// by Calude Sonnet 
//At 10:23 AM, the date('H') function will return '10'.
//The 'H' format in the date() function returns the hour in 24-hour format (00 to 23).
// So, $hour = 10 at this time.
```
... And what will it return at 15h02 AM ?
```
// good afternoon
```
Assume $a = 4. What instruction will return : 4 = four ? Why ?
```
echo '$a = four';
echo '$a = 2+2';
echo "$a = four";
// GPT
 Single quotes in PHP do not interpret variables or expressions.
 same
 Double quotes in PHP allow for variable interpolation, meaning the variable $a will be evaluated and replaced with its value. Since $a is 4, this statement outputs 4 = four.
```
In the case of a form to collect sensitive data, which method will we rather use to send the data :
```
GET
mailto
POST // GPT : Data sent via POST is included in the body of the HTTP request, not in the URL. This helps keep the data more secure as it is not exposed in the address bar or browser history.
```

### 03 Arrays

Arrays are a bit special : whereas the other types can only hold one value, arrays can contain more than one value, in fact, as many as we want! This is why the metaphor of the box seems a bit unfitting to Arrays; I 'd rather think of Arrays are as Shelves...

Declare an array:
```PHP
$ingredients = array( 'Milk', 'Egg', 'Flour', 'Butter', 'Sugar' );
```
PHP then stores this in memory : key => value
```PHP
Array
(
    [0] => 'Milk'
    [1] => 'Egg'
    [2] => 'Flour'
    [3] => 'Butter'
    [4] => 'Sugar'
)
```
We can read them using []:

```PHP
echo $ingredients[2];
// returns 'Flour'
```

**Creating Arrays**

```PHP
$team = array();
$team = [];
$team = [value1,value2,...];
$team = array();
$team[0] = value1;
$team[1] = value2;
$team[2] = value3;
$team[...] = value...;
```
**Exercises**
1. Here is an array of countries :
`$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );`
What will this line return ?
`echo $countries[2];` germany
2. Create an array representing your family members
```PHP
$fam = ["mother","father","brother","sister","dog"];
```
3. Display its content using the print_r function
```PHP
#The print_r() function prints the information about a variable in a more human-readable way.
echo "<br>";
print_r($fam);
```
4. Then, create an array describing your favourite recipes
```PHP
$recipe = [];
$recipe[0] = "egg";
$recipe[1] = "bacon";
$recipe[2] = "coffee";
$recipe[3] = "human souls";
```
5. Display its content using the print_r
```PHP
echo "<br>";
print_r($recipe);
```
6. Then, create an array listing your favourite films
```PHP
echo "<br>";
$films = array("GodFather","Tangled","InsideOut 1 and 2");
print_r($films);
```
7. Then, using that array, display only the one film you like best using its index
```PHP
echo "<br>";
echo $films[2];
```

**Most common array operations**
`print_r()` // shows array \
`echo '<pre>'` // presents array on a more human readable way\
`var_dump()` // gives more information from an array\
`echo $countries[2]`\
`add and element, the long way: array_push($countries,'England')`\
`the short way: $countries[] = 'England'`\
`with a key: $person['function'] = 'Junior Web Developer'`

Replace values with keys
```PHP
$person['function'] = 'Junior Web Developer';
echo $person['function'];
// returns 'Junior Web Developer'
$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'];
// returns 'Senior Web Developer'
```
**Associative Arrays**
We use the index to manipulate them.
```PHP
$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person[2] = 'Brussels';
```
**Coding an Associative Array**
```PHP
$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
```
Exercise:
Describe yourself using an associative array: $me. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.
Here is a head start :

`$me = array('firstname' => 'Karen');`
```PHP
$me = [
    'firstname' => 'Karen',
    'lastname' => 'The manager caller',
    'age' => 'old',
    'profession' => 'has a husband',
    'likes' => 'chaos'
];
echo '<pre>';
print_r($me);
echo '</pre>';
```
**Multidimensional arrays**
As seen before, you can store all types of values in an array... including other arrays! Your array then becomes a multidimensional Array. Very useful because now you can store many things that come as groups. For intance, let's add your favourite movies to the $mearray :
```PHP
$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
);

echo '<pre>';
print_r($me);
echo '</pre>'; // attention it is <prev> ... </prev>  
```
Exercices
1. Add your hobbies using an array to your $me array
```PHP
$me['hobbies'] = ...
```
2. Then, after the $me array, create a second array with the same keys as yours, to describe your mother : the $mother array (make it someone else if you prefer).
3. 
4. 
5. 
6. 
```PHP
//Array seption!!
$me = array(
    'age'    => 45,
    'firstname'         => 'Alexandre',
    'lastname'               => 'Plennevaux',
    'favourite_movies'     => array('My Own Private Idaho', 'Her', 'Matrix')
);
$me['hobbies'] = array(
    'read', 'sleep', 'more sleep', 'birdwatching'
);
echo '<pre>';
print_r($me);
echo '</pre>';

$mother = [];
$mother['age'] = 50;
$mother['firstname'] = 'Lourdes';
$mother['lastname'] = 'Souza';
$mother['favorite_movies'] = array('this', 'that');
$mother['hobbies'] = array('this1', 'that2');


echo '<pre>';
print_r($mother);
echo '</pre>';

$me['mother'] = $mother;
echo '<pre>';
print_r($me);
echo '</pre>';
```

**Manipulating arrays exercises**
Count the number of elements

We can use `count()` to get a number of elements:\
```PHP
echo count($mother['hobbies']);
echo '<br>';
echo count($me['hobbies']);
echo '<br>';
echo count($me['hobbies']) + count($mother['hobbies']);
```
Add an element in a multi-dimensional array
A friend introduced you to the joys of Taxidermy : it quickly becomes your new hobby. Try to find the right way to add that new hobby to your array's `'hobbies'` key.\
`$me['hobbies'][] = 'taxidormie'; // first get hobbies than inside array[] insert new value`

You decide you need a reset and change your last name to Durand. How would you update your array ?\
`$me['lastname'] = 'Durant';`

Create a new array from 2 others (or more)

Now, I wonder ... What are the potential hobbies your child could have ? It turns out there was a documentary on TV the other day, in which an expert in Genetics explained 2 possible scenarios that could answer that question :

- either intersection (only the hobbies common to both arrays)
- or a fusion (all the hobbies of each array together)
Try to guess the name of the 2 PHP functions that can make these two operations and look it up in the online PHP Manual. (Tip: both start with `array_`). Test their syntax and try to answer the question.