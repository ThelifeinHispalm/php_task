<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input string from the form
    $string = $_POST["string"];
    // Convert the string to uppercase
    $uppercaseString = strtoupper($string);
    // Output the uppercase string
    echo "Uppercase string: " . $uppercaseString;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uppercase String</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="string">Enter a string:</label><br>
        <input type="text" id="string" name="string"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
