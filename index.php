<?php
require ("src/religousTime.php");
$religousTime = new religousTime();

print_r($religousTime -> get_data("isfahan"));