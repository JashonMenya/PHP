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

    class Person
    {
        public $name;
        function sayHello()
        {
            echo "Hi! I'm $this->name!\n";
        }
    }

    $bob = new Person;
    $bob->name = "Bob";
    $bob->sayHello();

    $jack = $bob;
    $jack->sayHello();

    $jack->name = "Jack";
    $jack->sayHello();
    $bob->sayHello();

    ?>

</body>

</html>