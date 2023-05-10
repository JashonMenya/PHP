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

        // Constructor
        function __construct($name = "John Doe")
        {
            $this->name = $name;
        }

        // Destructor
        function __destruct()
        {
            echo "Say goodbye to $this->name!\n";
        }

        function sayHello()
        {
            echo "Hi! I'm $this->name!\n";
        }
    }

    $john = new Person("John");
    $sue = new Person("Sue");
    $john->sayHello();
    $sue->sayHello();

    // Destructors called when script terminates
    
    ?>
</body>

</html>