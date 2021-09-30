<?php
header('Content-type: text/html; charset=utf-8');
//$a = "Lorem Ipsum - это текст-\"рыба\", часто";
$a = "Давно выяснено, что при";
$link = "https://ru.lipsum.com/";
$homepage = file_get_contents($link);
$cleanpage = strip_tags($homepage);
$pos = strripos($cleanpage, $a);
$rest = substr($cleanpage, $pos, 179);
$rest = $rest."...";
//print_r($rest);
$array = explode ( ' ', $rest);
$lastword = implode ( ' ', array_slice($array, count($array)-2, 2));
$startword = implode ( ' ', array_slice($array, 0, count($array)-2));
$b = $startword . " "."<a href='{$link}'>{$lastword}</a>";
echo $b;

?>

