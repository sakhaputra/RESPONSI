<?php
$counterFile = 'counter.txt';
$count = (file_exists($counterFile)) ? (int)file_get_contents($counterFile) : 0;
$count++;
file_put_contents($counterFile, $count);
echo $count;
?>