<!DOCTYPE html>
<html>
<body>

<?php

//Menentukan bilangan positif/negatif dengan switch, case

$a = 5;

switch ($a) {
	case ($a < 0);
    	echo "bilangan $a adalah negatif";
        break;
	case ($a > 0);
    	echo "bilangan $a adalah positif";
        break;
        default;
        echo "bilangan netral";
}
?>
 
</body>
</html>