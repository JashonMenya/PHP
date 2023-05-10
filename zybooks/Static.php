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

        // Define static property and method
        static $species = "Homo sapiens";
        static function displaySpecies()
        {
            echo "Species: " . self::$species . "\n";
        }

        function __construct($name = "")
        {
            $this->name = $name;
        }
    }

    $bob = new Person("Bob");
    echo Person::$species . "\n";
    Person::displaySpecies();
    ?>

</body>

</html>