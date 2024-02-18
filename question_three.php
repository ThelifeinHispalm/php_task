
<?php

// Given an array of integers nums and a target integer target, return the indices of two numbers in the array that add
// up to the target. There can be only one valid answer.

function twoSum($nums, $target) {
    $complements = array(); // Create an empty hashmap to store complements
    
    // Iterate through the array
    foreach ($nums as $index => $num) {
        $complement = $target - $num; // Calculate the complement for the current number
        
        // Check if the complement exists in the hashmap
        if (array_key_exists($complement, $complements)) {
            // Return the indices of the two numbers that add up to the target
            return [$complements[$complement], $index];
        }
        
        // Store the current number and its index in the hashmap
        $complements[$num] = $index;
    }
    
    // If no such pair is found, return an empty array
    return [];
}

// Example usage:
$nums = [2, 7, 11, 15];
$target = 9;
$result = twoSum($nums, $target);
if (!empty($result)) {
    echo "Indices of the two numbers that add up to $target: " . implode(", ", $result);
} else {
    echo "No two numbers found that add up to $target.";
}

?>
