<?php

//Using print() function with parentheses
print("Hello World <br>");

//Using print() function without parentheses
print "Hello World <br>";

//Using echo() function with parentheses
echo("Hello World <br>");

//Using echo() function without parentheses
echo "Hello World";

?>








<?php

$grade = "C";

switch ($grade) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Well Done";
        break;
    case "D" :
  echo "You Passed";
        break;
    default :
        echo"Invalid grade";
}

//new line
echo "<br>";
echo "Your grade is ".$grade;
?>








<?php

$a=10;
$b=20;

$c=$a+$b;

echo "a+b=".$c;

?>








<?php

$x=30;

if($x==10)
 echo "Value of x is 10";
elseif($x==20)
 echo "Value of x is 20";
else
 echo "Value of x is 30";

?>






