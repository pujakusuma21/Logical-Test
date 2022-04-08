<!DOCTYPE html>
<html>
<body>

<?php

$i = 1;

while ($i <= 50) {
	if($i % 3 == 0 && $i % 5 == 0) {
    	echo "Angka: ", $i, " FooBar<br/>";
    } elseif($i % 3 == 0) {
    	echo "Angka: ", $i, " Foo<br/>";
    } elseif($i % 5 == 0) {
    	echo "Angka: ", $i, " Bar<br/>";
    }
    
    $i++;
}

?>



</body>
</html>