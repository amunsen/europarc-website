<?php snippet('head')?>

<div class="mt-4 sm:mt-8 lg:mt-12">
  <?php snippet('container', slots: true)?>
      <!-- Title Section -->
      <div class="py-6 pb-12 sm:py-8 sm:pb-16">
        <h1 class="text-cararra-950">
          <?=$page->title()?>
        </h1>
      </div>
  <?php endsnippet()?>
</div>

<?php foreach ($page->pageContent()->toBlocks() as $block): ?>
  <div id="<?=$block->id()?>" class="block block-type-<?=$block->type()?>">
    <?php snippet('blocks/' . $block->type(), ['block' => $block])?>
  </div>
<?php endforeach?>

<?php snippet('footer')?><y