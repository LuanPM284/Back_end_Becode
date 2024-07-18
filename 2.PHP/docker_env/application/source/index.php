<?php
// echo "Hello! <br>";
// echo "Hello! Twice <br> ";
// // phpinfo();
// echo ' 
// <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
// <html>
// <a href="/cats.php">Cats</a>
// <a href="/index.php">index</a>
// <a href="/variables">Variables</a>
// <a href="/conditions">Conditions</a>
// <br>
// <img src="https://i0.wp.com/backofficethinking.com/wp-content/uploads/2023/01/cute-kitten.jpg?resize=768%2C657&ssl=1" title="Cat open-source" alt="image of a orange kitten" />
// </html>
// ';
// $countries = array('Belgium', 'France', 'Germany', 'Netherlands', 'Ukraine');
// // normal print_r, inline
// print_r($countries);
// // the prev will present the array in a more array like, instead of inline
// echo '<pre>';
// print_r($countries);
// // var_dump will give more details, prev doesn't change it 
// echo '</pre>';
// var_dump($countries);
// form manunal: This function displays structured information about one or more expressions that includes its type and value. Arrays and objects are explored recursively with values indented to show structure.
// $me = [
//     'firstname' => 'Karen',
//     'lastname' => 'The manager caller',
//     'age' => 'old',
//     'profession' => 'has a husband',
//     'likes' => 'chaos'
// ];
// echo '<pre>';
// print_r($me);
// echo '</pre>';

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

echo count($mother['hobbies']);
echo '<br>';
echo count($me['hobbies']);
echo '<br>';
echo count($me['hobbies']) + count($mother['hobbies']);

$me['hobbies'][] = 'taxidormie';
$me['lastname'] = 'Durant';

echo '<pre>';
print_r($me);
echo '</pre>';