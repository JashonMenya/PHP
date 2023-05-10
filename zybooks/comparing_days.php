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
    $today = date_create("today");
    $tomorrow = date_create("tomorrow");

    if ($today < $tomorrow) {
        echo "Today is before tomorrow.\n";
    }

    $dateDiff = date_diff($today, $tomorrow);
    echo "Tomorrow is $dateDiff->d day away!\n";
    ?>
</body>

</html>