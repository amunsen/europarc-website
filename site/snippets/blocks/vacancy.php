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
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/144080519#/', 'source' => 'https://pictures.immobilienscout24.de/listings/f54532a4-013d-489b-91a9-335ca890af9b-1638163685.jpg/ORIG/legacy_thumbnail/1024x768/format/webp/quality/73', 'title' => 'Gastronomiefläche mit Außenterrasse'])?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/82371809#/', 'source' => 'https://pictures.immobilienscout24.de/listings/4a9bca2d-1fe2-4324-ab1e-86ec00a13890-1860905942.png/ORIG/legacy_thumbnail/1024x768/format/webp/quality/73', 'title' => 'Büroräume mit Sonnenterrasse im Europarc- Der Markenstandort'])?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/139531731#/', 'source' => 'https://pictures.immobilienscout24.de/listings/1324983f-1c22-443a-87d3-af60d75f2e13-1593784935.jpg/ORIG/legacy_thumbnail/1024x768/format/webp/quality/73', 'title' => 'Modernes Büro mit Sonnenterrasse in Top-Lage und günstigem Gewerbesteuerhebesatz'])?>
<?php snippet('vacancy', ['target' => 'https://www.immobilienscout24.de/expose/116205818#/', 'source' => 'https://pictures.immobilienscout24.de/listings/6df06512-7fee-49e1-bee4-89f095f86ea5-1715139720.jpg/ORIG/legacy_thumbnail/1024x768/format/webp/quality/73', 'title' => 'Work in the woods - Modernes Büro- auch als Co-Working in Top-Lage'])?>
<?php endsnippet()?>
    <div class="pt-8 flex justify-center">
      <a class="btn bg-slate-950 text-white rounded-2xl px-5 pt-1 pb-1.5 font-medium" href="https://www.immobilienscout24.de/anbieter/profil/europarc-dreilinden-gmbh" target="_blank">See all</a>
    </div>
  <?php endsnippet()?>
</section>