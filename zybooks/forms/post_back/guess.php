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

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $randNum = rand(1, 10);

      if ($randNum == $_POST["num"]) {
         echo "<h1>Correct!</h1>";
      } else {
         echo "<p>No, I was thinking of $randNum.</p>";
      }
   }
   ?>
</body>

</html>