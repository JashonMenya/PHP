<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>

<body>

    <?php
    // Display all error messages in the browser
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    echo "<p>This is a test.</p>";
    echo $test; // Generates notice because $test is not set to a value
    echo "<p>I repeat, this is only a test.</p>";
    $num = 7 % 5;
    print("$num");
    ?>

</body>

</html>