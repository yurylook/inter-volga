<?php
  header('Content-type: text/html; charset=utf-8');
   $arr = [1, 1, 2, 3, 4, -51, 12, 12, 12, 12];
   $result = 0;
   for ($i = 0; $i < count($arr) -1; $i++) {
    if ($arr[$i] === $arr[$i +1]){
      $result++;
    }
   }
    echo "<p>Число повторяющихся последовательных пар в массиве  {$result}</p>";

 ?>

