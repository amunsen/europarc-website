<?php
    $language  = $kirby->language();
    $lang_code = $language->code();
?>
<section class="py-8 sm:py-16 lg:py-24">
  <?php snippet('container', slots: true)?>
    <header class="text-center pb-8 md:pb-12 lg:pb-16">
    <?php if ($lang_code == 'de'): ?>
      <h2 class="">Unsere aktuellen Angebote</h2>
      <?php else: ?>
        <h2 class="">Open Vacancies</h2>
<?php endif?>
    </header>
    <?php snippet('grid', slots: true)?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/82371809#/', 'source' => 'https://pictures.immobilienscout24.de/listings/811bee90-a89f-49bd-8b94-4d706c316831-1881924309.jpg/ORIG/resize/1106x830%3E/format/webp/quality/73', 'title' => 'Helle Büroräume im Europarc- Der Markenstandort - auch als Co-Working'])?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/139531731#/', 'source' => 'https://pictures.immobilienscout24.de/listings/1324983f-1c22-443a-87d3-af60d75f2e13-1593784935.jpg/ORIG/resize/1106x830%3E/format/webp/quality/73', 'title' => 'Modernes Büro mit Sonnenterrasse in Top-Lage und günstigem Gewerbesteuerhebesatz'])?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/116205818#/', 'source' => 'https://pictures.immobilienscout24.de/listings/6df06512-7fee-49e1-bee4-89f095f86ea5-1715139720.jpg/ORIG/resize/1106x830%3E/format/webp/quality/73', 'title' => 'Arbeiten im Grünen: Modernes Büro & Co-Working im Europarc Dreilinden'])?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/157452024#/', 'source' => 'https://pictures.immobilienscout24.de/listings/e6ce7e1d-8264-4209-9120-1fb6e9da5b61-1882125647.jpg/ORIG/resize/1106x830%3E/format/webp/quality/73', 'title' => 'Attraktive Einzelhandelsfläche in bester Lage der Leonhardtstraße – Berlin Charlottenburg'])?>
<?php endsnippet()?>
    <div class="pt-8 flex justify-center">
      <a class="btn bg-slate-950 text-white rounded-2xl px-5 pt-1 pb-1.5 font-medium" href="https://www.immobilienscout24.de/anbieter/profil/europarc-dreilinden-gmbh" target="_blank">See all</a>
    </div>
  <?php endsnippet()?>
</section>