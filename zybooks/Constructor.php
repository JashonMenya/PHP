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
    class Person
    {
        public $name;

        // Constructor
        function __construct($name = "John Doe")
        {
            $this->name = $name;
        }

        function sayHello()
        {
            echo "Hi! I'm $this->name!\n";
        }
    }

    // Call the constructor with no argument
    $john = new Person;
    $john->sayHello();

    // Call the constructor with an argument
    $sue = new Person("Sue");
    $sue->sayHello();

    ?>
</body>

</html>