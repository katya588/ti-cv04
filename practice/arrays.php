<?php
// Obyčajné array: farby chytov
$items = ['žlté', 'modré', 'červené', 'zelené', 'biele'];
$items[] = 'čierne';   // šiesty element pridaný cez $items[] =

// Asociatívne array: jedna cesta
$item = ['name' => 'Modrý previs', 'order' => 7, 'category' => '6a (VI+)', 'price' => 5.5, 'available' => true];

// Čísla a ich zoradená kópia
$numbers = [10, 2, 7, 33, 4];
$sorted  = $numbers;
sort($sorted);

// Zoradenie int vs string (línie ciest)
$lines_int = [10, 2, 7];
$lines_str = ['10', '2', '7'];
sort($lines_int);
sort($lines_str);
// Výsledky sa líšia, lebo int sa zoraďuje podľa hodnoty (2, 7, 10), string podľa abecedy ('1' je pred '2').
?>
<!doctype html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arrays</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
  <h2>Farby chytov</h2>
  <ul>
  <?php foreach ($items as $element): ?>
    <li><?= $element ?></li>
  <?php endforeach; ?>
  </ul>
  <p>Počet elements: <?= count($items) ?>. Jednou vetou: <?= implode(', ', $items) ?>.</p>
  <p>Prvý: <?= $items[0] ?>, posledný: <?= $items[count($items) - 1] ?>.</p>

  <h2>Jedna cesta</h2>
  <ul>
  <?php foreach ($item as $key => $value): ?>
    <li><strong><?= $key ?></strong>: <?= is_bool($value) ? ($value ? 'true' : 'false') : $value ?></li>
  <?php endforeach; ?>
  </ul>

  <h2>Zoradenie</h2>
  <p>Zoradené čísla: <?= implode(', ', $sorted) ?></p>
  <p>Int: <?= implode(', ', $lines_int) ?></p>
  <p>String: <?= implode(', ', $lines_str) ?></p>
</body>
</html>
