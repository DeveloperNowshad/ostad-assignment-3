<?php
function evenOrOdd($num)
{
    
    if ($num % 2 == 0) {
        echo "this is an even number";
    } else {
        echo "this is an odd number";
    }
}
echo evenOrOdd(7);
?>