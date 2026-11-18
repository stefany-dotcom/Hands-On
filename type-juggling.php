<?php

/*
NAME : DIZON, STEFANY GEIER A.
BLOCK : WD - 201

TOPIC : Type Juggling
*/

$packs_text   = '5';
$price        = 2.5;
$total        = $packs_text * $price;

$in_stock     = true;
$bonus        = $in_stock + 1;

$loose_check  = ('10' == 10);
$strict_check = ('10' === 10);

$whole_packs  = (int) 7.9;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Type Juggling</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>The Candy Store</h1>
  <h2>Type Juggling</h2>
  <p>'5' (<?= gettype($packs_text) ?>) * 2.5 (<?= gettype($price) ?>) = <?= $total ?> (<?= gettype($total) ?>)</p>
  <p>true + 1 = <?= $bonus ?> (<?= gettype($bonus) ?>)</p>
  <p>'10' == 10: <?= var_export($loose_check, true) ?></p>
  <p>'10' === 10: <?= var_export($strict_check, true) ?></p>
  <p>(int) 7.9 = <?= $whole_packs ?></p>
</body>
</html>