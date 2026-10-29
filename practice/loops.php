<?php
$routes = ['Žltá hrana', 'Modrý previs', 'Červená platňa', 'Zelený komín', 'Biela rímsa'];
?>
<!doctype html>
<html lang="sk">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loops</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
  <h1>Loops</h1>

  <h2>for: riadky 10 až 1</h2>
  <table class="table">
  <?php for ($i = 10; $i >= 1; $i--): ?>
    <tr class="<?= $i % 2 == 0 ? 'table-light' : '' ?>">
      <td><?= $i ?></td>
      <td><?= $i * 5 ?> €</td>
    </tr>
  <?php endfor; ?>
  </table>

  <h2>foreach s poradím</h2>
  <ol>
  <?php foreach ($routes as $i => $value): ?>
    <li>Línia <?= $i + 1 ?>: <?= $value ?></li>
  <?php endforeach; ?>
  </ol>

  <h2>while: odpočítavanie po 2</h2>
  <?php $n = 5; ?>
  <?php while ($n > 0): ?>
    <p><?= $n ?>…</p>
    <?php $n -= 2; ?>
  <?php endwhile; ?>
</body>
</html>
