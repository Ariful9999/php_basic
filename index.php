<?php

//  Statements
// echo "Hellow World!";
// print('Hellow World!');


// Variables

/* $name = "Ariful Haque";

$my_parmanent_address = "Ghatail, Tangail.";
$my_current_address = "Tangail, Bangladesh.";
echo $name . '<br>';
echo $my_parmanent_address . '<br>';
echo $my_current_address; */

// Data types

$name = "Ariful Haque"; // String
$age = 34; // Integer
$height = 5.4; // Float
$cheak = true; // Boolean
$null_data = NULL; // Null

//echo "$name <br>";
/* var_dump($name);
var_dump($age);
var_dump($height);
var_dump($cheak);
var_dump($null_data); */

//echo $age .'<br>';
//echo $height . '<br>';
//echo $cheak . '<br>';
//echo $null_data;

// If, If Else, Else

/* $x =49;
if( $x < 40 ) {
   echo "It's True";
} elseif ( $x > 50) {
    echo "It's true inside elseif";
} else {
    echo "It's False";
} */

/* $x = 49;

if( $x < 40 ) :
    elseif ( $x > 50) :
        echo "It's true inside elseif";
    else :
  echo "It's false";
endif;
*/



// Functions

function my_function() {
    echo "This is my first php function";
}

//my_function();

function my_function_return() {
    return "This is my first php function return";
}
 // echo my_function_return();

/* 

@params1 Name
@params1 Agee

*/

function function_with_params( $params1, $params2 = null) {
    echo $params1 . ' . ' . $params2;
}

// function_with_params( 'Ariful Haque', 34); // Call the function with 2 Args


/* Arrays */

// Index Array

 $info = array( 'Ariful Haque ', 34, 'Bangladesh');
 
/* echo "<pre>";
 print_r($info);
 echo "</pre>";

 echo $info[2] . '<br>';
 echo $info[0];

 */

// var_dump( $info );

// Associative Array

$car = array(

    'name' => 'Toyota',
    'color' => 'white',
    'price' => 11000,
);

/* var_dump( $car );
echo $car['name'] . '<br>';
echo $car['color'] . '<br>';
echo $car['price'] . '<br>';
 */

// Loops

/* foreach( $info as $item ) {
    echo $item . '<br>';
}
*/

/* 
foreach( $car as $key => $item ) {
    echo $key . ' : ' . $item . '<br>';
}
*/



$x = 0;

 while( $x < count($info) ) {
     echo $info[$x] . '<br>';
     $x++;  
 }
