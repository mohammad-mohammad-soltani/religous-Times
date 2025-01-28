<?php
require ("src/religousTime.php");
use Mohammad\ReligiousTimes\ReligiousTimes;
$religousTime = new ReligiousTimes();

print_r($religousTime -> get_data("isfahan"));