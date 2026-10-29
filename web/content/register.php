<?php // content/register.php: iba formulár (sekcia s form). Nie je tu html, head, menu, footer ani h1. ?>
<section id="formular" class="p-4 mb-4 rounded">
  <h2>Povedz mi o svojej ceste</h2>
  <p class="zvyraznene p-3 mb-4">
    Vyplň formulár. Po odoslaní nájdeš svoje údaje v adresnom riadku.
  </p>

  <form method="get" action="">
    <div class="mb-3">
      <label for="meno" class="form-label">Meno</label>
      <input type="text" class="form-control" id="meno" name="meno" required />
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" required />
    </div>

    <div class="mb-3">
      <label for="pocet" class="form-label">Počet cestujúcich</label>
      <input type="number" class="form-control" id="pocet" name="pocet" min="1" max="10" required />
    </div>

    <div class="mb-3">
      <label for="termin" class="form-label">Termín odchodu</label>
      <input type="date" class="form-control" id="termin" name="termin" required />
    </div>

    <div class="mb-3">
      <label for="rozpocet" class="form-label">Rozpočet na osobu (0 až 2000 €)</label>
      <input type="range" class="form-range" id="rozpocet" name="rozpocet" min="0" max="2000" step="100" value="500" />
    </div>

    <div class="mb-3">
      <label for="destinacia" class="form-label">Destinácia</label>
      <select class="form-select" id="destinacia" name="destinacia" required>
        <option value="">-- vyber --</option>
        <option value="more">pri mori</option>
        <option value="hory">v horách</option>
        <option value="mesto">mesto</option>
      </select>
    </div>

    <div class="mb-3">
      <fieldset>
        <legend class="fs-6">Doprava</legend>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="doprava" id="doprava_auto" value="auto" checked required />
          <label class="form-check-label" for="doprava_auto">autom</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="doprava" id="doprava_vlak" value="vlak" />
          <label class="form-check-label" for="doprava_vlak">vlakom</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="doprava" id="doprava_lietadlo" value="lietadlo" />
          <label class="form-check-label" for="doprava_lietadlo">lietadlom</label>
        </div>
      </fieldset>
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="poistenie" name="poistenie" value="ano" />
        <label class="form-check-label" for="poistenie">Chcem cestovné poistenie</label>
      </div>
    </div>

    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter" value="ano" />
        <label class="form-check-label" for="newsletter">Posielať tipy na cesty</label>
      </div>
    </div>
    <div class="mb-3">
      <label for="krajina" class="form-label">Krajina</label>
      <input type="text" class="form-control" id="krajina" name="krajina" />
    </div>
    <div class="mb-3">
      <label for="sprava" class="form-label">Správa</label>
      <textarea class="form-control" id="sprava" name="sprava" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Odoslať</button>
  </form>
</section>
