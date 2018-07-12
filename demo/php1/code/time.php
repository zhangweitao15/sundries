<?php
header('content-type:text/html;charset=utf-8');
$hour = 22;
if (0 < $hour && $hour <= 6 ) {
    echo"早上好";
} else if ($hour > 6 && $hour <= 12 ) {
    echo"上午好";
} else if ($hour >12 && $hour < 18 ) {
    echo"下午好";
} else {
    echo"晚上好";
}
?>