<?php

$a = 3;
$b = 10;

if($a < $b){
    echo "A is Smaller";
}
?>
<?php

$a = 30;
$b = 10;

if($a < $b){
    echo "A is Smaller";
}

echo "Here is other statement";

?>

<?php

$a = 30;
$b = 30;

if($a == $b){
    echo "A is Smaller";
}

echo "Here is other statement";
?>

<?php

$a = 30;
$b = "30";

if($a == $b){
    echo "A is Smaller<br>";
}

echo "Here is other statement";
?>
<?php

$a = 30;
$b = "30";

if($a === $b){
    echo "A is Smaller<br>";
}

echo "Here is other statement";

?>
<?php

$a = 30;
$b = "30";

if($a == $b):
    echo "A is Smaller<br>";
endif;

echo "Here is other statement";

?>
<?php

$a = 30;
$b = "30";

if($a == $b):
    echo "A is Smaller<br>";
    echo "A is Smaller<br>";
endif;

echo "Here is other statement";
?>
