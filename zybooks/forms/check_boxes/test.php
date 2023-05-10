<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_POST["newsletter"])) {
        echo "<p>You will receive the newsletter.</p>";
    }

    if (!isset($_POST["topics"])) {
        echo "<p>No topics selected.</p>";
    } else {
        echo "<p>Selected topics:</p><ul>";
        foreach ($_POST["topics"] as $topic) {
            echo "<li>$topic</li>";
        }
        echo "</ul>";
    } ?>
</body>

</html>