<?php
    $number = $_GET["number"];
    $favorite_number = rand(1,20);
    $message = checkGuess($number, $favorite_number);

    function checkGuess($number, $favorite_number)
    {
        if ($number == $favorite_number) {
            return "You won!";
        }
        elseif ($number < $favorite_number) {
            return "Too low, sorry you lose!";
        } else {
          return "Too high, sorry you lose!";
        }
    }
 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Guess My Number</title>
</head>
<body>
  <div class="container">
    <h1><?php echo $message; ?></h1>
    <h3><?php echo "You guessed: " . $number; ?> </h3>
    <h3><?php echo "The right answer was: " . $favorite_number; ?> </h3>
  </div>
</body>
</html>
