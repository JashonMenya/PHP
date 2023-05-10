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

    $filename = "./about.txt";
    $myfile = fopen($filename, "r");
    if (!$myfile) {
        die("Unable to open $filename.");
    }

    $contents = fread($myfile, filesize($filename));
    echo "<p>About me: $contents</p>";
    fclose($myfile);

    ?>
</body>

</html>