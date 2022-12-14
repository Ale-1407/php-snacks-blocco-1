<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->


<?php
   $array = [];

   for($i = 0; count( $array ) < 15; $i++){
      $number = rand(1, 100);
       
      if( !in_array($number, $array)) {
          $array[] = $number;
      }
    }

   for( $k = 0; $k < count($array); $k++){
      echo $array[$k];
      echo "<br>";
   }

?>
