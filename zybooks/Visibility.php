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
        public $name; // Accessible to anyone
        protected $age; // Accessible to this class and inherited classes
        private $height; // Accessible to this class only
    
        function __construct($name = "", $age = 0, $height = 0)
        {
            $this->name = $name;
            $this->age = $age;
            $this->height = $height;
        }

        function displayInfo()
        {
            echo "Info: $this->name, $this->age, $this->height\n";
        }
    }

    $bob = new Person("Bob", 21, 6.1);
    $bob->displayInfo();
    echo $bob->name;
    echo $bob->age; // Fatal error (accessing protected property)
    echo $bob->height; // Fatal error (accessing private property)
    ?>

</body>

</html>