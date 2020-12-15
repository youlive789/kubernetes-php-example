<?php
echo "Hello php <br><br>";

$output = null;
$retval = null;
exec("/sbin/ifconfig", $output, $retval);
print_r($output);

echo "<br><br>Pod IP<br>";

$output = null;
$retval = null;
exec('/bin/echo $MY_POD_IP', $output, $retval);
print_r($output);