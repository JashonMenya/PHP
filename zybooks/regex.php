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
    $words = ["ban", "babble", "make", "flab"];
    $regex = "/ab/";

    foreach ($words as $word) {
        if (preg_match($regex, $word)) {
            echo "<p>$word matches!</p>";
        }
    }
    ?>
</body>

</html>