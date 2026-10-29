<?php // content/routes.php: obsah stránky Tipy (sekcia s kartami + tabuľka). Nie je tu html, head, menu, footer ani h1. ?>
<section id="tipy" class="p-4 mb-4 rounded">
  <h2>Tipy na cestu</h2>
  <div class="row g-3">
    <div class="col-md-6 col-lg-6">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title h5">Pred odchodom</h3>
          <p class="card-text">
            Pred odchodom si skontroluj doklady, poistenie a predpoveď
            počasia.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title h5">Do batohu</h3>
          <p class="card-text">
            Do batohu patria pohodlná obuv a powerbanka.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title h5">Ubytovanie</h3>
          <p class="card-text">
            Rezervácie ubytovania rob s dostatočným predstihom, hlavne v
            sezóne.
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6">
      <div class="card h-100">
        <div class="card-body">
          <h3 class="card-title h5">Peniaze</h3>
          <p class="card-text">
            Maj pri sebe malú hotovosť aj kartu a over si poplatky za
            platby v zahraničí.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="prehlad" class="bg-warning-subtle p-5 mb-5 rounded">
  <h2>Prehľad tipov</h2>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Položka</th>
          <th scope="col">Kedy</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Doklady</td><td>Pred odchodom</td></tr>
        <tr><td>Poistenie</td><td>Pred odchodom</td></tr>
        <tr><td>Predpoveď počasia</td><td>Pred odchodom</td></tr>
        <tr><td>Pohodlná obuv</td><td>Do batohu</td></tr>
        <tr><td>Powerbanka</td><td>Do batohu</td></tr>
        <tr><td>Rezervácia ubytovania</td><td>S dostatočným predstihom</td></tr>
      </tbody>
    </table>
  </div>
</section>
