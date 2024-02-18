<?php

// Function to validate the entered date
function validateDate($year, $month, $day) {
    // Check if the year, month, and day are within valid ranges
    if ($year < 1 || $year > 9999 || $month < 1 || $month > 12 || $day < 1 || $day > 31) {
        return false;
    }
    
    // Check if the day is valid for the given month and year
    if ($day > cal_days_in_month(CAL_GREGORIAN, $month, $year)) {
        return false;
    }
    
    return true;
}

// Function to determine if the year is a leap year
function isLeapYear($year) {
    return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
}

// Function to determine the day of the week
function getDayOfWeek($year, $month, $day) {
    $timestamp = mktime(0, 0, 0, $month, $day, $year);
    $dayOfWeek = date('N', $timestamp); // 'N' format returns the day of the week (1 for Monday, 7 for Sunday)
    return $dayOfWeek;
}

// Function to display the day of the week
function displayDayOfWeek($dayOfWeek) {
    switch ($dayOfWeek) {
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
        default:
            return "Invalid day of the week";
    }
}

// Main program
$year = (int) readline("Enter the year (e.g., 2024): ");
$month = (int) readline("Enter the month (1-12): ");
$day = (int) readline("Enter the day (1-31): ");

// Validate the entered date
if (!validateDate($year, $month, $day)) {
    echo "Invalid date. Please enter a valid date.\n";
    exit();
}

// Determine the day of the week
$dayOfWeek = getDayOfWeek($year, $month, $day);

// Display the day of the week
echo "The day of the week for $year-$month-$day is: " . displayDayOfWeek($dayOfWeek) . "\n";

?>
