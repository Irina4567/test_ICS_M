<?php
$result = [];
$min = 0;
$max = 256;
$r = random_int($min, $max);
$g = random_int($min, $max);
$b = random_int($min, $max);
$result['res'] = 'success';
$result['color']  = "rgb($r,$g,$b)";

echo json_encode($result);
?>