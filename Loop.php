
<?php
$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
?>



<?php
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
} 
?>



<?php
$x=array("3","2","1");

foreach ($x as $value)
{
     echo $value . " ";
}



// <?php 
// $x = 1; 
// do {
//     echo "The number is: $x <br>";
//     $x++;
// } while ($x <= 5);
// ?>
?>



<?php 
$x = 1; 
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?><?php
$x=array("10","20","30","40","50");
foreach ($x as $value)
{
        if($value==30){
     continue; // It causes for loop to jump on next iteration
  }
     echo $value . " ";
}
?>



<?php
$x=array("10","20","30","40","50");
foreach ($x as $value)
{
        if($value==30){
     break; // control comes out of the for loop
  }
     echo $value . " ";
}
?>