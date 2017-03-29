<?php
for ($x = 50; $x >= 0; $x-= 10) {
	
	if ($x == 30) {
		print "entre en condicion 30 <br>";
	} else if ($x == 20) {
		print "entre en condicion 20 <br>";
	} else {
		print $x ."<br>";
	}
}
$y = 0;
print "<br>";
while ($y <= 10) {
	switch ($y) {
		case 6:
			print "print caso 6";
			break;
		case 10:
			print "caso 10 termine";
		break;
		default:
			print $y ."<br>";
			break;
	}
	$y = $y + 2;
}

$z = 0;
print "<br>";
do {
	print $z ."<br>";
	$z = $z + 3;
} while ($z <= 21);