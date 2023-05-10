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

    set_error_handler("errorHandler");

    function errorHandler($errno, $errstr)
    {
        echo "<p>Error $errno: $errstr</p>";
    }

    $file = fopen("batting-average.txt", "r");
    if ($file) {
        $battingAve = fread($file, filesize($file));
        fclose($file);
    }

    if ($battingAve < 0.1) {
        trigger_error(
            "Batting average is too low.",
            E_USER_WARNING
        );
    }



    function myErrorHandler($errno, $errstr, $errfile, $errline, $errcontext)
    {
        echo "<p>Our website is experiencing problems. Please check back again soon.</p>";
        if ($errno <= E_NOTICE) {
            notifyDevelopers($errno, $errstr, $errfile, $errline, $errcontext);
        } else {
            notifyHelpdesk($errno, $errstr, $errfile, $errline, $errcontext);
        }
    }

    ?>


</body>

</html>