<?php

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