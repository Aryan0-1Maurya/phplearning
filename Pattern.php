<?php

/*
Change value of $lines to increase no. of lines in triangle pattern
*/


$lines=6;

//font-family: monospace used for traingle formatting
echo "<p style=\"font-family: monospace;\">";

for($i=1;$i<=$lines;$i++)
{
 for($j=1;$j<$lines-($i-1);$j++)
 {
  echo str_repeat('&amp;nbsp;',1);
 }
 for($k=1;$k<=$i;$k++)
 {
  echo "*";
  for($k1=1;$k1<$k;$k1+=$k)
  {
   echo "*";
  }
 }
 for($j=1;$j<$lines-($i-1);$j++)
 {
  echo str_repeat('&amp;nbsp;',1);
 }
 echo "<br>";
}
echo "</p>";

?>

-----------------
*
**
***
****
*****
-----------------

<?php

for($i=1;$i<=5;$i++)
{
 for($j=1;$j<=$i;$j++)
 {
  echo "*";
 }

 echo "<br>";
}

?>






----------------------
5 4 3 2 1
5 4 3 2
5 4 3
5 4
5
-------------------------

<?php

for($i=1;$i<=5;$i++)
{
 for($j=5;$j>=$i;$j--)
 {
  echo $j." ";
 }
 echo "<br>";
}

?>






-----------------
1 
1 2 
1 2 3 
1 2 3 4 
1 2 3 4 5 
-----------------

<?php

for($i=1;$i<=5;$i++)
{
 for($j=1;$j<=$i;$j++)
 {
  echo $j." ";
 }
 echo "<br>";
}

?>




----------------------
*****
****
***
**
*
-------------------------

<?php

for($i=1;$i<=5;$i++)
{
 for($j=5;$j>=$i;$j--)
 {
  echo "*";
 }

 echo "<br>";
}

?>





<?php

/*
Change value of $lines to increase no. of lines in triangle pattern
*/

$lines=6;

echo "<p style=\"font-family:monospace;\">";

for($i=1;$i<=$lines;$i++)
{
 $count=(2*$i)+1;
	
 for($k=1;$k<=($lines-$i);$k++)
 {
  echo str_repeat("&amp;nbsp;", 1);
 }

 $j=1;  

 for($j;$j<=$count/2;$j++)
 {
  echo $j;  
 }

 $j--;

 for($k=($j-1);$k>=1;$k--)
 {
  echo $k;
 }
 echo "<br>";
}
echo "</p>";
?>





-----------------
1 
1 2 
1 2 3 
1 2 3 4 
1 2 3 4 5 
-----------------

<?php

for($i=1;$i<=5;$i++)
{
 for($j=1;$j<=$i;$j++)
 {
  echo $j." ";
 }
 echo "<br>";
}

?>





