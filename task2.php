<?php
// Function to find the index of the smallest element in an array
function smallestindex($array) {
    return array_search(min($array), $array);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input array from the form
    $arr = $_POST["arr"];
    // Find the smallest index
    $index = smallestindex($arr);
    // Output the smallest index
    echo "Index of the smallest element: " . $index;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Smallest Index</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="arr">Enter elements of the array (comma-separated):</label><br>
        <input type="text" id="arr" name="arr"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
