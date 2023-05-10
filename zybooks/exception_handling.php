<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">;
    <title>Document</title>
</head>

<body>

    <?php
    function findSum($numbers, $startIndex, $endIndex)
    {
        if ($startIndex < 0) {
            throw new Exception("startIndex is less than 0.");
        } else if ($endIndex >= count($numbers)) {
            throw new Exception("endIndex is too large.");
        }

        $sum = 0;
        for ($i = $startIndex; $i <= $endIndex; $i++) {
            $sum += $numbers[$i];
        }
        return $sum;
    }

    $nums = [1, 2, 3, 4];
    echo findSum($nums, 0, 2);
    echo findSum($nums, 3, 4);

    echo "<p>Done!</p>";
    ?>

</body>

</html>