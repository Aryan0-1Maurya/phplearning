





<?php 

//create 4*4 multidimensional array

$a=array(array(1,2,3,4),
  array(1,2,3,4),
  array(1,2,3,4),
  array(1,2,3,4));
  
$b=array(array(1,2,3,4),
  array(1,2,3,4),
  array(1,2,3,4),
  array(1,2,3,4));
  
//print array

echo "Array a :<br><br>";

printMatrix($a);

echo "<br>Array b :<br><br>";

printMatrix($b);

  
//add two array

echo "<br>Array c = a + b :<br><br>";

addMatrix($a,$b);

//user defined function to print multidimensional array

function printMatrix($matrix)
 {
  for($i=0;$i<count($matrix);$i++)
   {
    for($j=0;$j<count($matrix);$j++)
     {
      echo $matrix[$i][$j]." ";
     }
    echo "<br>";
   }
 }
	
//user defined function to add multidimensional array

function addMatrix($matrix_1,$matrix_2)
 {
  for($i=0;$i<count($matrix_1);$i++)
   {
    for($j=0;$j<count($matrix_1);$j++)
     {
      $c[$i][$j]=$matrix_1[$i][$j]+$matrix_2[$i][$j];
      echo $c[$i][$j]." ";
     }
    echo "<br>";
   }
 }

?>






<?php

$language = array("JAVA", "C++", "C","PYTHON");

//find length using count()
$array_length=count($language);

for($i = 0; $i<$array_length; $i++) {
    echo $language[$i];
 //break line statement
    echo "<br>";
}
?>






<?php

$language = array( "C"=>"nice", "C++"=>"very nice","JAVA"=>"amazing","PYTHON"=>"mind blowing");

foreach($language as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value;
    echo "<br>";
}

?>






<?php

$language = array("JAVA", "C++", "C","PYTHON");

//find length using count()
$array_length=count($language);

echo "Length of language array is ".$array_length;

?>






<?php

$language = array("JAVA", "C++", "C","PYTHON");

echo "I like " . $language[0];
echo ", " . $language[1];
echo ", " . $language[2];
echo " and ".$language[3];

?>






<?php

$language[0]="JAVA";
$language[1]="C++";
$language[2]="C";
$language[3]="PYTHON";

echo "I like " . $language[0];
echo ", " . $language[1];
echo ", " . $language[2];
echo " and ".$language[3];

?>






<?php 
//create 4*4 integer multidimensional array

$a=array(array(1,2,3,4),
  array(1,2,3,4),
  array(1,2,3,4),
  array(1,2,3,4));
  
/* create 4*4 multidimensional array containing
 variable data type values
*/  
$b=array(array(1,"JAVA",3,4.1),
  array(1,"C++",3,4.2),
  array(1,"PHP",3,4.3),
  array(1,"PYTHON",3,4.4));
  
//print array

echo "Array a :<br><br>";

printMatrix($a);

echo "<br>Array b :<br><br>";

printMatrix($b);



//user defined function to print multidimensional array

function printMatrix($matrix)
 {
  for($i=0;$i<count($matrix);$i++)
   {
    for($j=0;$j<count($matrix);$j++)
     {
      echo $matrix[$i][$j]." ";
     }
    echo "<br>";
   }
 }
	


?>






<?php

$language = array( "C"=>"nice", "C++"=>"very nice","JAVA"=>"amazing","PYTHON"=>"mind blowing");

echo "C is ".$language["C"];
echo ", C++ is " . $language["C++"];
echo ", JAVA is " . $language["JAVA"];
echo " and PYTHON is ".$language["PYTHON"];

?>






<?php

$language["C"]="nice";
$language["C++"]="very nice";
$language["JAVA"]="amazing";
$language["PYTHON"]="mind blowing";

echo "C is ".$language["C"];
echo ", C++ is " . $language["C++"];
echo ", JAVA is " . $language["JAVA"];
echo " and PYTHON is ".$language["PYTHON"];

?>
