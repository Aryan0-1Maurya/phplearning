<?php

//Remove characters from both sides of a string
//('I' From start and 'Hub!' from end)

$str = "I love Programming Hub!";

echo "Without trim:" .$str . "<br><br>";

echo "With trim:".trim($str,"IHub!");

?>






<?php
$s1="Hello Universe";
echo "s1 = $s1 <br>";
echo "Sub string = ".substr($s1,6)."<br>"; //will result as "Universe"
echo "Sub string = ".substr($s1,-1)."<br>";
echo "Sub string = ".substr($s1,0,10)."<br>";
echo "Sub string = ".substr($s1,0,-2)."<br>";
?>


<?php
$s1="Universe ";
echo "s1 = $s1 <br>";
echo "The length of s1 = ".strlen($s1)."<br>";

$s2=trim($s1); //will remove white spaces
echo "s2 = $s2 <br>";
echo "The length of s2 = ".strlen($s2)."<br>";
?>



<?php
$s1="Hello Universe";
$s2="Hello world!";

echo "s1 = $s1 <br>";
echo "s2 = $s2 <br>";
echo "String found = ".strrchr($s1,"Universe")."<br>";

//Search a string for the ASCII value of "e" (101) and return all characters from this position to the end of the string

echo "String found = ".strrchr($s2,101); 
?>


<?php
$s1="Hello Universe";
echo "s1 = $s1 <br>";
echo "Reverse string = ".strrev($s1); //will reverse the string
?><?php
$s1="Hello Universe";
echo "s1 = $s1 <br>";
echo "No of words in string = ".str_word_count($s1);
?>