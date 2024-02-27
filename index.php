<!DOCTYPE html>
<html>
<head>

    <body>

        
        <?php

        echo "hello world"

        ?>

     /* function 
     var_dump() */

       $x = 5;
      var_dump($x);

 var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);



/*Variable*/
$x = $y = $z = "Fruit";

echo $x;
echo $y;
echo $z;

/*A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a <function:></function:> */
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";




































































    </body>
</head>
