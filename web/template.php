<!doctype html>
<?php // template.php: rám celého webu (head, menu, main, footer). Obsah stránok tu nie je, je v content/. ?>
<html lang="sk">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $title ?> | Cestovateľský denník</title>
    <!-- najprv Bootstrap CSS z CDN, až za ním môj style.css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">Cestovateľský denník</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#menu"
          aria-controls="menu"
          aria-expanded="false"
          aria-label="Zobraziť menu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link <?= $active == 'index' ? 'active' : '' ?>" href="index.php">Domov</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $active == 'routes' ? 'active' : '' ?>" href="routes.php">Tipy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $active == 'form' ? 'active' : '' ?>" href="form.php">Registrácia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $active == 'contact' ? 'active' : '' ?>" href="contact.php">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      <h1 class="py-4"><?= $title ?></h1>
      <?php include $content; ?>
    </main>

    <footer class="border-top py-3 mt-4 text-center">
      <div class="container">
        <p class="mb-0">&copy; <?= date('Y') ?> Kateryna Lompart</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
