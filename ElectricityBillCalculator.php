<?php

$consumedUnits = readline("Enter electricity units consumed: ");
$billedAmount = 0;

if ($consumedUnits <= 100) {
    $billedAmount = $consumedUnits * 5;
}else if($consumedUnits <= 200){
    $billedAmount = $consumedUnits * 10;
}else{
    $billedAmount = $consumedUnits *15;
}

echo "Billed Amount: $" . $billedAmount;