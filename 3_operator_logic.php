<!DOCTYPE html>
<html>
<body>

<?php

$a = 7;
$b = 2;

$condition = true;
$count = 0;

while ($condition) {

	if ($a < $b){
    	$condition = false;
    } else {
    	$a = $a - $b;
        $count++;
    }
    
}

echo $count;
?>



</body>
</html>