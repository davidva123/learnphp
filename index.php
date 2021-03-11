
<?php

// $colors = array('orange','red','blue');

// print_r($colors);
// $colors[] = 'purp5le';
// print("<br>");
// print_r($colors);
// print("<br />");

// $home_towns = array(

//     'David' => 'Brooklyn',
//     'Jessica' => 'New Jersey',
//     'Marah' => 'Long Island',
// );

// print("<br />");
// print("<br />");
// print("<pre>");
// print_r($home_towns);
// print("</pre>");

// print('David is from: ' . $home_towns['David']);

// $name= "Teresa"; // Heading 1
// $city = "NYC";
// $movie = "Star Wars"; //Italics
// $friend = "George"; //Bold
// $candy = "Sour Patch Kids";

// print ("<h1>My Name is $name </h1><br /> and I live in  $city  I like to watch <i>$movie</i>  with my friend <b>$friend</b> and i like to eat $candy ");


//LOGIC
// $a = 9 > 5; // TRUE
// $b = 10 != 10; // FALSE
// $c = $a && $b; // FALSE
// $d = $a || $b; //TRUE
// $e = $b && $c; // FALSE 
// $f = $a || $d; // TRUE

// $logic = array($a,$b,$c,$d,$e,$f);
// echo ('<pre>');

// var_export($logic);
// echo ('</pre>');

// if (2 > 1){
//     echo ('Line 51');

// }
// else {
//     echo ('Line 55');
// }

// echo("\n<br />");
// if (3 > 9):
//     echo ('Line 59');

//     elseif(5 >29):
//         echo ('Line 62');
//     else:
//         echo('This line always Shows!');
//     endif;
//

//Ternary Operator
// $isLoggedIn = true;

// $message = "Welcome: " . ($isLoggedIn ? 'Dufus Arye' : 'General Putz');

// echo $message;
// $name = null;

//Check if item exists use it otherwise no
//echo isset($name) ? $name :'Thomas';
//OR
// $name = $name ?: 'Joe';

// echo $name;
//Challenge 2
// $min = 1;
// $max = 50;
// $guess = 76;
// $num = 76;


// if (($guess > $min) && ($guess < $max)){
//     echo('You are in the range!');
// }
// if ($guess === $num){
//     echo("<br />");
//     echo("You guessed the answer");
// }
//  else {
//     echo('You are out of the range!');
//  }

// 

//Challenge 3

/**
 * Write equations that evaluate the following: 
 * (14 + 82 - 32 / 2)^2 > 1024
 * 18 x (3 ÷ 6 -9) x 10 > -1530
 * 5x (12 ÷2 -8 x 4 +12x6)    6-8*4+72 > 64
 * 
 * Be sure to use additional parentesis to get the right results! 
 */

// $resultsArr = array(
// ((14 + 82 - (32 / 2)) ** 2),
// (18 * (3 / 6 - 9) * 10),
// (5  * ((12 /2) -8 * 4 +(12*6)) )


//);
// echo("<pre>");
// var_export($resultsArr);
// echo("</pre>");
// var_dump($resultsArr);

// $start = 1;
// $current = 0;
// $end = 200;
// $counter = 0;

// /do {
    // echo $current;
    // echo("<br />");
    // echo($current++);
// }
// while (40 < 0);

// echo $start . '-' . $end;
/*
While counter < 200
currentcount = start + start;



take start 

*/
function double($a)
{
    return $a * 2;
}

$a = 5;

// echo double($a);
// echo "<p>$a</p>";


// print "<p>$a</p>";

$numbz = array(1,2,3,4,5,6);
// echo("BEFORE");
// echo("<pre>");
// print_r($numbz);
// echo("</pre>");

foreach($numbz as &$num){
    // echo("<pre>");
    // echo("Performing Loop");
    // echo("/<pre>");
    triple($num);
}
// echo("AFTER");
// echo("<pre>");
// print_r($numbz);
// echo("</pre>");

$d = 0;
// echo ('D Before' . $d);
// echo ('<br />');
function quad(){
global $d;
$d += 5;
}
quad();
// echo ('D After' . $d);



$b = 5;
function triple(&$b){
    $b *= 25;
}
// echo "<p>B before is $b</p>";
triple($b);
// echo "<p>B after is $b</p>";


$names = array('Joe','Mike','Lewis');

print_r($names);
usort($names,function($a,$b){
return $a[1] <=> $b[1];
});
print("<br />");
print_r($names);


class Person {
var $name;
var $age;
var $birthday =false;

//Constructor
function __construct ($name,$age){
    $this->name = $name;
    $this->age = $age;
}

public function get_name(){
    return $this->name;
}
public function get_age(){
    return $this->age;
}

public function set_name($new_name){
    $this->name = $new_name;
}

public function set_birthday($b){
    $this->birthday = $b;
    $this->update_age();
}

private function update_age(){
    $this->age = ($this->birthday) ? ++$this->age :$this->age;
}

}

?>






