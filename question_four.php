<?php
// Given a string s, determine whether it is a palindrome (reads the same 
function isPalindrome($s) {
    // Remove non-alphanumeric characters and convert to lowercase
    $s = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($s));
    
    // Get the length of the string
    $length = strlen($s);
    
    // Iterate through the string from both ends towards the middle
    for ($i = 0; $i < $length / 2; $i++) {
        // Compare characters from the beginning and the end
        if ($s[$i] !== $s[$length - $i - 1]) {
            return false; // If characters don't match, it's not a palindrome
        }
    }
    
    return true; // If all characters match, it's a palindrome
}

// Example usage:
$string1 = "A man, a plan, a canal, Panama";
$string2 = "race a car";

if (isPalindrome($string1)) {
    echo "$string1 is a palindrome.";
} else {
    echo "$string1 is not a palindrome.";
}
echo "\n";

if (isPalindrome($string2)) {
    echo "$string2 is a palindrome.";
} else {
    echo "$string2 is not a palindrome.";
}
echo "\n";

?>
