<?php 
$bla=array("Ted"=>"19", "Eve"=>"18", "Naum"=>"17", "Sharon"=>"16", "Rose"=>"15");
// the inbuilt function assort is used to sort an associative array in ascending order based on its value and not key

ksort($bla);
foreach ($bla as $x => $x_value) {
	echo "Name is " .$x."and i am ".$x_value;
	# code... 
	echo"<br>";
}
// inbuilt functions
// 
 ?>