<?php
$b = file_get_contents('./data.txt');

$arr = unserialize($b);
print_r($arr);
?>
