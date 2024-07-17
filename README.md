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

