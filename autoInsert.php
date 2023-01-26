<?php

include_once __DIR__ . '/oopCrud.php';

$oop = new oopCrud();


$name = rand(11111,99999) . "ahfailhduw" ;
$time = date("h:i:s");

$oop->insertData($name , $time);

?>