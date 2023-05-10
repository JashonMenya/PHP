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

        // Property
        public $name;

        // Method
        function sayHello()
        {
            echo "Hi! I'm $this->name!\n";
        }
    }

    $bob = new Person;
    $bob->name = "Bob";
    // $bob->sayHello();
    



    // Inheritance
    
    // SuperHero inherits from the Person class
    class SuperHero extends Person
    {
        public $powers = [];

        function addPower($power)
        {
            array_push($this->powers, $power);
        }

        function displayPowers()
        {
            echo "Powers:\n";
            foreach ($this->powers as $power) {
                echo "- $power\n";
            }
        }
    }

    // Create a SuperHero using the inherited Person constructor
    $superman = new SuperHero("Super-Man");
    $superman->name = "Super Man";

    // Call an inherited Person method
    $superman->sayHello();

    // Call SuperHero methods
    $superman->addPower("Flying");
    $superman->addPower("Invulnerability");
    $superman->addPower("X-ray vision");
    $superman->displayPowers();


    ?>
</body>

</html>