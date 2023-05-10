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

    $filename = "names.txt";
    $myfile = fopen($filename, "w");
    if (!$myfile) {
        die("Unable to open $filename.");
    }
    fwrite($myfile, "Ren" . PHP_EOL . "Shannon" . PHP_EOL);
    fclose($myfile);

    ?>
</body>

</html>