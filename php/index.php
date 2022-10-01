<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>

  </head>
  <body>

    <?php 

      // Variable
      echo "<h2>========== Variable ===========</h2>";

      $x = 10;
      $xx = 20;
      $xxx = $x + $xx;

      echo $xxx . '<br><br>';

      // Data Types
      echo "<h2>========== Data Types ===========</h2>";

      echo "String", ' = ', 'Hello Bangladesh <br>';
      echo 'Integer', ' = ', 1,'<br>';
      echo 'float', ' = ', 1.55,'<br>';
      echo "Boolean", ' = ', 'false / true <br>';
      echo "NULL", ' = ', '""','<br>';
      echo "Array", ' = ', 'array("World","Bangladesh","Khulna","Kushtia")';

      echo '<br>','<br>';

      // Function
      echo "<h2>========== Function ===========</h2>";

      function first ( $one = 1, $two = 2, $three = 3, $four = 4 ) {
        return " I'm a " .$one. " of " .$two. " batch " .$three. ", roll " .$four;
      }
      echo first ( 'student', "SoftTech-IT", '1', '11.' );

      echo '<br>','<br>';

      // Condition
      echo "<h2>========== Condition ===========</h2>";

      $result = 100;

      if ( $result < 0 || $result > 100 ) {
        echo "Invalid Result";
      }
      elseif ( $result > 32 & $result < 40 ) {
        echo "You got D";
      }
      elseif ( $result >= 40 & $result < 50 ) {
        echo "You got C";
      }
      elseif ( $result >= 50 & $result < 60 ) {
        echo "You got B";
      }
      elseif ( $result >= 60 & $result < 70 ) {
        echo "You got A-";
      }
      elseif ( $result >= 70 & $result < 80 ) {
        echo "You got A";
      }
      elseif ( $result >= 80 & $result <= 100 ) {
        echo "You got A+";
      }
      else {
        echo "You are Faild";
      }

      echo '<br>','<br>';

      // While Loop
      echo "<h2>========== While Loop ===========</h2>";

      $x = 0;
      
      while ( $x <= 10 ) {
        echo $x. '<br>';
        $x++;
      }
      echo '<br>','<br>';
      
      // Do While Loop
      echo "<h2>========== Do While Loop ===========</h2>";

      $y = 0;
      
      do {
        echo $y. '<br>';
        $y--;
      }while ( $y >= -10 );

      echo '<br>','<br>';

      // For Loop
      echo "<h2>========== For Loop ===========</h2>";
      
      for ( $z = 0; $z <= 5; $z++ ) {
        echo $z. '<br>';
      };

      echo '<br>','<br>';

      // Foreach Loop
      echo "<h2>========== Foreach Loop ===========</h2>";
      
      $numbers = [ 'one', 'two', 'three', 'four', 'five'];

      foreach ( $numbers as $number ) {
        echo $number. '<br>';
      }

    ?>
  </body>
</html>