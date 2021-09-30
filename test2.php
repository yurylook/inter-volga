<?php
   header('Content-type: text/html; charset=utf-8');
   $image = imageCreateFromPng("test-img.png");

   $img = imagescale( $image, 200, 100);
 //  header("Content-type: image/jpeg");
   imagepng($img, 'test.png');
   echo "<div><img src='test.png'></div>";
   imageDestroy($image);
 ?>
