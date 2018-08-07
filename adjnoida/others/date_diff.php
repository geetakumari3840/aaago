<?php

$OldDate = strtotime("2015-04-13");
$NewDate = date('M j, Y', $OldDate);
//echo $OldDate;echo "<br>";
//echo $NewDate;echo "<br>";
$diff = date_diff(date_create($NewDate),date_create(date("M j, Y")));


 $t = $diff->format('%a'); echo '<br>';
 $ye = $diff->format('%y');echo '<br>';
 $mo = $diff->format('%m');echo '<br>';
 $da = $diff->format('%d');echo '<br>';
 

// year & years farmulla

if ($ye === "0" ) {
	
	echo '';echo '<br>';
}
elseif ($ye === "1") {
	echo $ye;echo ' year';echo '<br>';
}
else {
	echo $ye;echo ' years';echo '<br>';
	}
//end years


// month & months farmulla

if ($mo === "0" ) {
	
	echo '';echo '<br>';
}
elseif ($mo === "1") {
	echo $mo;echo ' month';echo '<br>';
}
else {
	echo $mo;echo ' months';echo '<br>';
	}
//end months

// day & days farmulla

if ($da === "0" ) {
	
	echo '';echo '<br>';
}
elseif ($da === "1") {
	echo $da;echo ' day';echo '<br>';
}
else {
	echo $da;echo ' days';echo '<br>';
	}
//end days

if ($t >= "365") {
    echo $diff->format('%y Years %m months %d days');
} elseif ($t < "365" and $t > "30") {
     echo $diff->format('%m months %d days');
} else {
     echo $diff->format('%a days');
}
?>






