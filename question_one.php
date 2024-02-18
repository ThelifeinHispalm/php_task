<?php
// Your task is to design a PHP function that takes a student's CGPA as input and returns a string containing both
// the CGPA value and the corresponding letter grade based on the following criteria:  Excellent (A): CGPA >= 4.0  Very Good (B+): 3.5 <= CGPA < 4.0  Good (B): 3.0 <= CGPA < 3.5  Fair (C+): 2.5 <= CGPA < 3.0  Pass (C): 2.0 <= CGPA < 2.5  
function calculateGrade($cgpa) {
    // Check the range of CGPA and assign the corresponding letter grade
    if ($cgpa >= 4.0) {
        $grade = "Excellent (A)";
    } elseif ($cgpa >= 3.5 && $cgpa < 4.0) {
        $grade = "Very Good (B+)";
    } elseif ($cgpa >= 3.0 && $cgpa < 3.5) {
        $grade = "Good (B)";
    } elseif ($cgpa >= 2.5 && $cgpa < 3.0) {
        $grade = "Fair (C+)";
    } elseif ($cgpa >= 2.0 && $cgpa < 2.5) {
        $grade = "Pass (C)";
    } else {
        $grade = "Fail"; // Assuming anything below 2.0 is a fail, you may adjust this as per your grading system
    }
    
    // Return a string containing both CGPA value and corresponding letter grade
    return "CGPA: $cgpa - $grade";
}

// Example usage:
$cgpa = 3.8;
echo calculateGrade($cgpa); // Output: CGPA: 3.8 - Very Good (B+)
?>
