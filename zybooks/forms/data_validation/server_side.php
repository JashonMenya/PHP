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
    function getData($field)
    {
        if (!isset($_POST[$field])) {
            $data = "";
        } else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    $name = getData("name");
    $howmany = getData("howmany");
    if ($name == "") {
        echo "<p>Please enter your name.</p>";
    } elseif ($howmany == "" || $howmany < 1 || $howmany > 4) {
        echo "<p>Please select how many widgets you would like to order.</p>";
    } else {
        echo "<p>$name ordered $howmany widgets.</p>";
    }

    ?>
</body>

</html>