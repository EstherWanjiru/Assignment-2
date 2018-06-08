<?php 


 //if u want to sort an indexed array in ascending order you will use the inbuilt function sort
 	$sortme=array(10,20,30,40,50,39,29);
 	sort($sortme);
 	 //displaying the values in the array using a for loop
 	 $mylength=count($sortme);
 	  for ($i=0; $i <$mylength ; $i++) {

 	  	#code...
 	  	echo "$sortme[$i]";
 	  	echo "<br>";
 	  } ?>