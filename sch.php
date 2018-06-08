<?php 
	$names = "";
	$names = $_POST['firstname'];

$maths="";
 $maths=$_POST['mat'];
 echo "$maths";
 echo"<br><br>";

$french="";
 $french=$_POST['fren'];
 echo "$french";
 echo"<br><br>";

 $science="";
 $science=$_POST['sci'];
 echo "$science";
 echo"<br><br>";


$swahili="";
 $swahili=$_POST['swa'];
 echo "$swahili";
 echo"<br><br>";

$physics="";
 $physics=$_POST['phyc'];
 echo "$physics";
 echo"<br><br>";

$history="";
 $history=$_POST['histo'];
 echo "$history";
 echo"<br><br>";

 $geography="";
 $geography=$_POST['geo'];
 echo "$geography";
 echo"<br><br>";

$average=(($maths+$french+$science+$swahili+$physics+$history+$geography)/7);
if ($average>80){
echo "A-Excellent";
}

elseif ($average>60){
	echo "B-very good";
}

elseif ($average>50) {
	echo "B--good";
}

elseif ($average>40){
	echo "C+-fair";
}

elseif ($average>30) {
	echo "C-fail";
}

echo "<table border='40px'>
   <tr>
	<th>Name</th>
	<th>Math</th>
	<th>French</th>
	<th>French</th>
	<th>Swahili</th>
	<th>Physics</th>
	<th>History</th>
	<th>Geography<th>
	</tr>

	<tr>
	<th>Esther</th>
	<th>69</th>
	<th>90</th>
	<th>80</th>
	<th>76</th>
	<th>56</th>
	<th>85</th>
	<th>83</th>
	</tr>
	
</table>";
if ($grade>80) {
	echo "A";
}
if ($grade>70) {
	echo "B+";
}
if ($grade>60) {
	echo "B";
}
if ($grade>50) {
	echo "C+";
}
if ($grade>40) {
	echo "C";
}
if ($grade>30) {
	echo "D+";
}
	?>
