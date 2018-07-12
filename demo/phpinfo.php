<?php
 $callback = $_GET['callback'];
 $str = '{"name":"zs","age":18}';
 echo $callback . "('$str')";

?>