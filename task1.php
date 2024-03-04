<?php
// Prompt user for three numbers
echo "Enter three numbers: \n";
$numbers = [];
for ($i = 0; $i < 3; $i++) {
    $numbers[] = readline("Number " . ($i + 1) . ": ");
}

// Sort the numbers
sort($numbers);

// Output in ascending order
echo "Numbers in ascending order: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
?>
