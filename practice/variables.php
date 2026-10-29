<?php
// Téma: lezecká stena
$name   = 'Modrý previs';   // string: názov cesty je text
$phone  = '0905 123 456';   // string: začína nulou, má medzery, nepočíta sa s ním
$line   = 7;                // int: číslo línie, podľa neho sa zoraďuje
$value  = 6.0;              // float: hodnota obťažnosti, desatinná bodka
$open   = true;             // bool: cesta je otvorená (true/false bez apostrofov)
$since  = 2021;             // int: rok, odkedy lezieme
$years  = date('Y') - $since;                    // výpočet z roku a dnešného dátumu
$avg    = round(($value + 5.0 + 6.3) / 3, 1);    // priemer float hodnôt na 1 desatinné miesto
$height = 12.5;             // float: výška steny v metroch
$owner  = 'Lezecký klub Košice'; // string: prevádzkovateľ
?>
<!doctype html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Variables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
  <h1>Variables a výpočty</h1>
  <p>Dnes je <?= date('j. n. Y') ?>.</p>
  <p>Cesta <strong><?= $name ?></strong> je na línii <?= $line ?>.<br>
     Leziem <?= $years ?> rokov.</p>
  <p>Priemerná hodnota ciest: <?= number_format($avg, 1, ',', ' ') ?></p>
  <p>Výška steny: <?= number_format($height, 1, ',', ' ') ?> m, prevádzkuje ju <?= $owner ?>. Kontakt: <?= $phone ?>. Otvorené: <?= $open ? 'áno' : 'nie' ?>.</p>

  <h2>var_dump</h2>
  <pre><?php var_dump($name, $phone, $line, $value, $open, $since, $years, $avg, $height, $owner); ?></pre>
  <?php
  // Pokus so zlým typom: $line = '7'; var_dump ukáže string(1) "7" namiesto int(7).
  // Zmenené späť na int.
  ?>
</body>
</html>
