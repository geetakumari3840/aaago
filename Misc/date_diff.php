<?php

$OldDate = strtotime("2015-04-13");
$NewDate = date('M j, Y', $OldDate);
//echo $OldDate;echo "<br>";
//echo $NewDate;echo "<br>";
$diff = date_diff(date_create($NewDate),date_create(date("M j, Y")));


 $t = $diff->format('%a');
 $ye = $diff->format('%y');
 $mo = $diff->format('%m');
 $da = $diff->format('%d');
 

// year & years farmulla

if ($ye === "0" ) {
	
	echo '';
}
elseif ($ye === "1") {
	echo $ye;echo ' year ';
}
else {
	echo $ye;echo ' years ';
	}
//end years


// month & months farmulla

if ($mo === "0" ) {
	
	echo '';
}
elseif ($mo === "1") {
	echo $mo;echo ' month ';
}
else {
	echo $mo;echo ' months ';
	}
//end months

// day & days farmulla

if ($da === "0" ) {
	
	echo '';echo '<br>';
}
elseif ($da === "1") {
	echo $da;echo ' day';
}
else {
	echo $da;echo ' days';
	}
//end days

?>






