<?php
$start = $_POST['start'];
$end = $_POST['end'];

$file = file('file.txt');
echo ($file[$start].$file[$end]);













?>